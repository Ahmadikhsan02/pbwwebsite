

@extends('layouts.app')

@section('title', 'Login BioPay')

@section('content')

<div class="auth-page">

    <div class="auth-card">

        <div class="logo">B</div>

        <h2>Selamat Datang</h2>

        <p>Silakan masuk ke akun BioPay Anda</p>

        <form action="#" method="POST">

            @csrf

            <div class="mb-3 text-start">
                <label>Email</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Masukkan email"
                       required>
            </div>

            <div class="mb-3 text-start">
                <label>Password</label>

                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Masukkan password"
                       required>
            </div>

            <button type="submit" class="btn btn-success w-100">
                Masuk
            </button>

        </form>

        <p class="mt-4">
            Belum punya akun?
            <a href="{{ url('/register') }}">Daftar Sekarang</a>
        </p>

    </div>

</div>

@endsection