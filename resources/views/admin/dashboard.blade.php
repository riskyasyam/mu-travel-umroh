<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.dashboard')

@section('title', 'MU Travel | Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="bg-white p-5 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold">Jumlah Paket</h2>
        <p class="text-2xl font-bold">{{ $packageCount }}</p>
    </div>
    <div class="bg-white p-5 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold">Jumlah Dokumentasi</h2>
        <p class="text-2xl font-bold">{{ $dokumentasiCount }}</p>
    </div>
    <div class="bg-white p-5 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold">Jumlah Testimoni</h2>
        <p class="text-2xl font-bold">{{ $testimoniCount }}</p>
    </div>
</div>

@endsection
