@extends('layouts.dashboard')

@section('title', 'MU Travel | Dashboard')

@section('content')

<h4>Tambah Paket Umroh</h4>

<form action="{{ route('admin.paket.create.store') }}" method="POST">
    @csrf
    <label>Nama Paket</label>
    <input type="text" name="nama_paket" class="form-control mb-2">
    <label>Foto Paket</label>
    <input type="text" name="foto_paket" class="form-control mb-2">
    <label>Deskripsi</label>
    <input type="text" name="description" class="form-control mb-2">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control mb-2">
    <label>Durasi</label>
    <input type="text" name="durasi" class="form-control mb-2">
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control mb-2">
    <label>Rating Madinah</label>
    <input type="number" step="0.1" name="rating_madinah" class="form-control mb-2">
    <label>Rating Makkah</label>
    <input type="number" step="0.1" name="rating_makkah" class="form-control mb-2">
    <label>Hotel Madinah</label>
    <input type="text" name="hotel_madinah" class="form-control mb-2">
    <label>Hotel Makkah</label>
    <input type="text" name="hotel_makkah" class="form-control mb-2">
    <label>Pesawat</label>
    <select name="pesawat" class="form-control mb-2">
        <option value="Lion Air">Lion Air</option>
        <option value="Emirates">Emirates</option>
        <option value="Citilink">Citilink</option>
        <option value="Garuda Indonesia">Garuda Indonesia</option>
    </select>
    </select>
    <label>Sisa Kursi</label>
    <input type="number" name="sisa_kursi" class="form-control mb-2">
    <button type="submit" class="btn btn-primary">Tambah Paket</button>
</form>

@endsection