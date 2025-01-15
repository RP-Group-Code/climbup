<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservasiController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['authCheck']], function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('Dashboard Reservasi');
    });
});

Route::controller(ReservasiController::class)->group(function () {
    Route::get('/reservasi', 'index')->name('Reservasi');
    Route::post('/postreservasi', 'store')->name('Post Reservasi');
    Route::get('/datareservasi', 'data')->name('Data Reservasi');
});
Route::controller(LoginController::class)->group(function () {
    Route::post('/loginuser', 'logins')->name('masuk');
    Route::get('/login', 'index')->name('login');
    // Route::post('/register', 'store')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});
