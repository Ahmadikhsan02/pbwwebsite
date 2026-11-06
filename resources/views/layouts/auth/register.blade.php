register.blade.php

@extends('layouts.app')

@section('title', 'Registrasi BioPay')

@section('content')

<div class="auth-page">

    <div class="auth-card">

        <div class="logo">B</div>

        <h2>Buat Akun BioPay</h2>

        <p>Daftarkan diri Anda untuk menggunakan BioPay</p>

        <form action="#" method="POST">

            @csrf

            <div class="mb-3 text-start">
                <label>Nama Lengkap</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       placeholder="Nama lengkap"
                       required>
            </div>

            <div class="mb-3 text-start">
                <label>Email</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Email aktif"
                       required>
            </div>

            <div class="mb-3 text-start">
                <label>Nomor HP</label>

                <input type="text"
                       name="phone"
                       class="form-control"
                       placeholder="Nomor HP">
            </div>

            <div class="mb-3 text-start">
                <label>Password</label>

                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Buat password"
                       required>
            </div>

            <div class="mb-3 text-start">
                <label>Konfirmasi Password</label>

                <input type="password"
                       name="password_confirmation"
                       class="form-control"
                       placeholder="Ulangi password"
                       required>
            </div>

            <button type="submit" class="btn btn-success w-100">
                Daftar Sekarang
            </button>

        </form>

        <p class="mt-4">
            Sudah punya akun?
            <a href="{{ url('/login') }}">Login</a>
        </p>

    </div>

</div>

@endsection