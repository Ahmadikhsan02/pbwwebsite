<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', fn () => redirect('/login'));

Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/register', fn () => view('auth.register'))->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::view('/dashboard', 'dashboard')->middleware('auth');

Route::view('/transactions', 'dashboard')->middleware('auth');
Route::view('/transactions/create', 'dashboard')->middleware('auth');
Route::view('/fingerprint', 'dashboard')->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->middleware('auth');
