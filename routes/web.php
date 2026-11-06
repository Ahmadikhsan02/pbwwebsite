<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Login
Route::view('/login', 'auth.login');

// Halaman Registrasi
Route::view('/register', 'auth.register');

// Halaman Dashboard
Route::view('/dashboard', 'dashboard');