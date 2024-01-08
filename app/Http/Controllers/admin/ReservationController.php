<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin-panel.reservations.reservations', [
            'reservations' => Reservation::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-panel.reservations.create', [
            'tables' => Table::where('status', 'Available')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation_date = Carbon::parse($request->reservation_date);
        // get the table choosed for this reservation
        $table = Table::findOrFail($request->table_id);

        $request->validate([
            'reserver_name' => 'required|max:255',
            'reserver_email' => 'required|email',
            'reserver_phone' => 'required|numeric',
            'reservation_date' => 'required|after:' . now()->toDateString() . ' ' . config("app.rest_open_time") . '|before:' . now()->addWeek()->toDateString() . ' ' . config('app.rest_close_time'),
            'guest' => 'required|numeric'
        ]);

        //  validat if the table match the number of guests
        if ($table->guest < $request->guest)
            return back()->with('error', 'Please , Choose table base on the guest !');

        // validate if the table reserved fot this date
        foreach ($table->reservations as $reservation) {
            $registred_res_date = Carbon::parse($reservation->reservation_date)->toDateString();
            if ($registred_res_date == $reservation_date->toDateString())
                return back()->with('error', 'The table choosen is reserved for this day , please choose other one !');
        };

        try {
            Reservation::create($request->except(['_token']));
            $m = "Reservation created successfully";
        } catch (\Throwable $th) {
            $m = "Can not create reservation, please try again";
        }
        return redirect(route('admin.reservations.index'))->with('message', $m);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        return view('admin-panel.reservations.edit', [
            'reservation' => $reservation,
            'tables' => Table::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $type = '';
        try {
            $reservation->update($request->except(['_token']));
            $m = "Reservation updated successfully";
            $type = 'message';
        } catch (\Throwable $th) {
            $m = "Can not update reservation, please try again";
            $type = 'error';
        }
        return redirect(route('admin.reservations.index'))->with($type, $m);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        try {
            $reservation->delete();
            $m = "Reservation deleted successfully";
        } catch (\Throwable $th) {
            $m = "Can not delete reservation, please try again";
        }
        return redirect(route('admin.reservations.index'))->with('message', $m);
    }
}