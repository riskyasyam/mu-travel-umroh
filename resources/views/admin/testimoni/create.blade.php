@extends('layouts.dashboard')

@section('title', 'MU Travel | Tambah Dokumentasi')

@section('content')

<div class="mx-auto bg-white p-6 shadow-lg rounded-lg w-full">
    <div class="max-w-3xl p-6 rounded-lg bg-center">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Tambah Testimoni</h2>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.testimoni.create.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium text-gray-700">foto_testimoni</label>
            <input type="file" name="foto_testimoni" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('admin.testimoni') }}" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition">
                Kembali
            </a>
        
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Tambah Foto
            </button>
        </div>
    </form>
    </div> 
</div>

@endsection
