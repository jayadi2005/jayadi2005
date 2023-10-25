<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\registCon;
use App\Http\Controllers\Dashboard;

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

Route::get('index', function () {
    return view('index');
});
Route::get('/', [LoginCon::class, 'login'])->name('login');
Route::post('actionlogin', [LoginCon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard')->
middleware('auth');
Route::get('actionlogout', [LoginCon::class, 'actionlogout'])->name('actionlogout')->
middleware('auth');
Route::get('register', [registCon::class, 'register'])->name('register');
Route::post('register/action', [registCon::class, 'actionregister'])-> name('actionregister');