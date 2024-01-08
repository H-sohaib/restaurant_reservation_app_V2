<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MenusController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\TablesController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('', adminController::class)->name('index');
    Route::resource('categories', CategoryController::class);
    Route::resource('menus', MenusController::class);
    Route::resource('tables', TablesController::class);
    Route::resource('reservations', ReservationController::class);
});

Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::get('/make_reservation/step_one', [MainPageController::class, 'create_step_one'])->name('make_reservation.step_one.create');
Route::post('/make_reservation/step_one', [MainPageController::class, 'store_step_one'])->name('make_reservation.step_one.store');
Route::get('/make_reservation/step_two', [MainPageController::class, 'create_step_two'])->name('make_reservation.step_two.create');
Route::post('/make_reservation/step_two', [MainPageController::class, 'store_step_two'])->name('make_reservation.step_two.store');
Route::get('/make_reservation/done', [MainPageController::class, 'registred'])->name('make_reservation.done');

Route::get('/categories', [MainPageController::class, 'show_categories'])->name('main_page.categories.show');
Route::get('/categories/{category}', [MainPageController::class, 'show_category_menus'])->name('main_page.categories.menus');
Route::get('/menus', [MainPageController::class, 'show_menus'])->name('main_page.menus.show');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';