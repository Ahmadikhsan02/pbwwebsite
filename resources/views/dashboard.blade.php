dashbord.blade.php

@extends('layouts.app')

@section('title', 'Dashboard BioPay')

@section('content')

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">

    <div class="container">

        <a class="navbar-brand fw-bold text-success" href="/dashboard">
            BioPay
        </a>

        <div class="ms-auto">

            <span class="me-3">Halo, Pengguna</span>

            <a href="/login" class="btn btn-outline-success btn-sm">
                Keluar
            </a>

        </div>

    </div>

</nav>


<!-- DASHBOARD -->
<div class="container py-5">

    <h2>Selamat Datang di BioPay</h2>

    <p class="text-muted">
        Sistem Pembayaran Berbasis Biometrik Sidik Jari
    </p>


    <!-- SALDO -->
    <div class="row mt-4">

        <div class="col-md-6">

            <div class="saldo-card">

                <p>Total Saldo Anda</p>

                <h2>Rp 0</h2>

                <small>Saldo akun pengguna</small>

            </div>

        </div>


        <div class="col-md-6">

            <div class="info-card">

                <h4>Keamanan Akun</h4>

                <p>
                    Gunakan verifikasi sidik jari
                    untuk menjaga keamanan transaksi Anda.
                </p>

            </div>

        </div>

    </div>


    <!-- MENU -->
    <h4 class="mt-5 mb-3">Menu Utama</h4>

    <div class="row">

        <div class="col-md-4 mb-3">

            <a href="/transactions/create" class="menu-card">

                <h5>Bayar / Transaksi</h5>

                <p>Melakukan pembayaran baru.</p>

            </a>

        </div>


        <div class="col-md-4 mb-3">

            <a href="/transactions" class="menu-card">

                <h5>Riwayat Transaksi</h5>

                <p>Melihat riwayat pembayaran.</p>

            </a>

        </div>


        <div class="col-md-4 mb-3">

            <a href="/fingerprint" class="menu-card">

                <h5>Sidik Jari</h5>

                <p>Menu verifikasi biometrik.</p>

            </a>

        </div>

    </div>

</div>

@endsection