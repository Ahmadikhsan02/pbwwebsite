<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/login'));

// Login & Registrasi
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');

// Sementara (demo): setelah submit langsung ke dashboard.
// Ganti dengan controller autentikasi sungguhan nanti.
Route::post('/login', fn () => redirect('/dashboard'));
Route::post('/register', fn () => redirect('/login'));

// Dashboard
Route::view('/dashboard', 'dashboard');

// Placeholder agar menu dashboard tidak 404
Route::view('/transactions', 'dashboard');
Route::view('/transactions/create', 'dashboard');
Route::view('/fingerprint', 'dashboard');
