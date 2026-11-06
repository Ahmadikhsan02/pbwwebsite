<?php

use Illuminate\Support\Facades\Route;

// Halaman utama langsung menuju login
Route::get('/', function () {
    return redirect('/login');
});

// Halaman Login
Route::view('/login', 'layouts.auth.login');

// Halaman Registrasi
Route::view('/register', 'layouts.auth.register');

// Halaman Dashboard
Route::view('/dashboard', 'dashboard');