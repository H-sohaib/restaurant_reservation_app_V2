<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        return view('visitors_pages.home', [
            'menus' => Menu::orderBy('id', 'desc')->get(),
            'menus_count' => Menu::get()->count(),
        ]);
    }

    public function create_step_one(Request $request)
    {
        return view('visitors_pages.make_reservation.step-one', [
            'min_date' => Carbon::today(),
            'max_date' => now()->addWeek(),
            'reservation' => $request->session()->get('reservation')
        ]);
    }
    public function store_step_one(Request $request)
    {
        $validated_data = $request->validate([
            'reserver_name' => 'required|max:255',
            'reserver_email' => 'required|email',
            'reserver_phone' => 'required|numeric',
            'reservation_date' => 'required|after:' . now()->toDateString() . ' ' . config("app.rest_open_time") . '|before:' . now()->addWeek()->toDateString() . ' ' . config('app.rest_close_time'),
            'guest' => 'required|numeric'
        ]);

        // store the request in the session
        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated_data);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated_data);
            $request->session()->put('reservation', $reservation);
        };


        return to_route('make_reservation.step_two.create');
    }


    public function create_step_two(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        return view('visitors_pages.make_reservation.step-two', [
            'tables' => Table::where('status', 'Available')->where('guest', '>=', $reservation->guest)->get(),
            'reservation' => $reservation
        ]);
    }

    public function store_step_two(Request $request)
    {
        $step_two_res = $request->session()->get('reservation');
        $step_one_res_date = Carbon::parse($step_two_res->reservation_date);
        $table = Table::findOrFail($request->table_id);
        // validate if the table reserved for this table
        foreach ($table->reservations as $reservation) {
            $registred_res_date = Carbon::parse($reservation->reservation_date)->toDateString();
            if ($registred_res_date == $step_one_res_date->toDateString())
                return back()->with('error', 'The table choosen is reserved for this day , please choose other one !');
        };

        $step_two_res->table_id = $request->table_id;
        $step_two_res->save();
        $request->session()->forget('reservation');
        return to_route('make_reservation.done');
    }

    public function registred(Request $request)
    {
        return view('visitors_pages.make_reservation.registred');
    }


    public function show_categories(Request $request)
    {
        return view('visitors_pages.categories.index', [
            'categories' => Category::orderBy('id', 'desc')->paginate(10),
        ]);
    }
    public function show_category_menus(Category $category)
    {
        return view('visitors_pages.categories.menus', [
            'menus' => $category->menus,
        ]);
    }
    public function show_menus(Request $request)
    {
        return view('visitors_pages.menus.index', [
            'menus' => Menu::orderBy('id', 'desc')->paginate(10),
        ]);
    }
};