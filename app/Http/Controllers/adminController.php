<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Table;

class adminController extends Controller
{
    public function __invoke()
    {
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }
        $site_stats = [
            [
                'header' => 'Categories number',
                'stats' => Category::get()->count(),
                'route' => route('admin.categories.index')
            ],
            [
                'header' => 'Menus number',
                'stats' => Menu::get()->count(),
                'route' => route('admin.menus.index')
            ],
            [
                'header' => 'Tables number',
                'stats' => Table::get()->count(),
                'route' => route('admin.tables.index')
            ],
            [
                'header' => 'Reservations number',
                'stats' => Reservation::get()->count(),
                'route' => route('admin.reservations.index')
            ],
        ];
        return view("admin-panel.admin", compact('site_stats'));
    }
}