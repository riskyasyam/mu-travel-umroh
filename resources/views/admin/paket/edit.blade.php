@extends('layouts.dashboard')

@section('title', 'MU Travel | Edit Paket Umroh')

@section('content')

<div class="mx-auto bg-white p-6 shadow-lg rounded-lg w-full">
    <div class="max-w-3xl p-6 rounded-lg bg-center">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Edit Paket Umroh</h2>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.paket.edit.update', $package->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $package->id }}">

        <div>
            <label class="block font-medium text-gray-700">Nama Paket</label>
            <input type="text" name="nama_paket" value="{{ $package->nama_paket }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Foto Paket</label>
            <input type="file" name="foto_paket" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Deskripsi</label>
            <textarea name="description" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">{{ $package->description }}</textarea>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Harga</label>
            <input type="text" id="harga_display" name="harga" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200" oninput="formatHarga(this)">
            <input type="hidden" id="harga" name="harga"> <!-- Hidden input untuk backend -->
        </div>

        <div>
            <label class="block font-medium text-gray-700">Durasi (Hari)</label>
            <input type="number" name="durasi" value="{{ $package->durasi }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Tanggal Keberangkatan</label>
            <input type="date" name="tanggal" value="{{ $package->tanggal }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Hotel Madinah</label>
            <input type="text" name="hotel_madinah" value="{{ $package->hotel_madinah }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Rating Hotel Madinah</label>
            <input type="number" step="0.1" name="rating_madinah" value="{{ $package->rating_madinah }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Hotel Makkah</label>
            <input type="text" name="hotel_makkah" value="{{ $package->hotel_makkah }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Rating Hotel Makkah</label>
            <input type="number" step="0.1" name="rating_makkah" value="{{ $package->rating_makkah }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block font-medium text-gray-700">Pesawat</label>
            <select name="pesawat" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                <option value="Lion Air" {{ $package->pesawat == 'Lion Air' ? 'selected' : '' }}>Lion Air</option>
                <option value="Emirates" {{ $package->pesawat == 'Emirates' ? 'selected' : '' }}>Emirates</option>
                <option value="Citilink" {{ $package->pesawat == 'Citilink' ? 'selected' : '' }}>Citilink</option>
                <option value="Garuda Indonesia" {{ $package->pesawat == 'Garuda Indonesia' ? 'selected' : '' }}>Garuda Indonesia</option>
            </select>
        </div>

        <div>
            <label class="block font-medium text-gray-700">Sisa Kursi</label>
            <input type="number" name="sisa_kursi" value="{{ $package->sisa_kursi }}" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('admin.dokumentasi') }}" id="btnKembali" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition">
                Kembali
            </a>

            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
    </div> 
</div>

@endsection
