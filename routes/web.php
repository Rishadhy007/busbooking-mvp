<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ReservationController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [ReservationController::class,'store'])->middleware(['auth'])->name('reservation.store');
Route::get('/overview/{reservation}', [ReservationController::class,'show'])->middleware(['auth'])->name('reservation.show');
Route::get('/myBookings', [ReservationController::class,'showMyBookings'])->middleware(['auth'])->name('reservation.showMyBookings');

require __DIR__.'/auth.php';
