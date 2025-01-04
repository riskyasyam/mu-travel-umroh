<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.dashboard')

@section('title', 'MU Travel | Dashboard')

@section('content')
    <div class="flex-1 p-10 bg-white">
        <h1 class="text-5xl font-bold mb-5 font-elmessiri">Dashboard Admin</h1>
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-white p-5 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold">Jumlah Paket</h2>
                <p class="text-2xl font-bold">{{ $packageCount }}</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold">Jumlah Dokumentasi</h2>
                <p class="text-2xl font-bold">50</p>
            </div>
        </div>
    </div>
@endsection
