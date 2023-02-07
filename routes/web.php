<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\authDaftar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;


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

Route::redirect('home', 'dashboard');

Route::get('/auth', [authController::class, "index"])->name('login')->middleware('guest');
Route::get('/auth/redirect', [authController::class, "redirect"])->middleware("guest");
Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');
Route::post('/auth/login', [authController::class, "login"])->middleware('guest');
Route::get('/auth/logout', [authController::class, "logout"])->name('logout');

Route::post('/auth/daftar_aksi', [authDaftar::class, "daftar_aksi"])->middleware('guest');
Route::get('/auth/daftar', [authDaftar::class, "daftar"])->middleware('guest');

Route::get('/dashboard', [dashboard::class, 'index'])->middleware('auth');
// route::resource('data',authController::class);