@extends('layouts.dashboard')

@section('title', 'MU Travel | Dokumentasi')

@section('content')
    <div class="flex-1 p-10">
        <h1 class="text-5xl font-bold mb-5 font-elmessiri">Testimoni</h1>

        <!-- Tabel Data Paket -->
        <div class="bg-white p-5 rounded-lg shadow-md">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Foto Paket (URL)</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($testimoni as $index => $testimoni)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                            <td class="py-2 px-4 border-b">
                                @if ($testimoni->type == 'image')
                                    <img src="{{ asset('storage/' . $testimoni->file) }}" alt="Testimoni" class="w-32 h-32 object-cover">
                                @else
                                    <video width="200" controls>
                                        <source src="{{ asset('storage/' . $testimoni->file) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </td>                            
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('admin.testimoni.edit', $testimoni->id) }}" 
                                   class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                                <form action="{{ route('admin.testimoni.destroy', $testimoni->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded"
                                        onclick="return confirm('Yakin ingin menghapus paket ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tombol Tambah Paket -->
        <div class="mt-5">
            <a href="{{ route('admin.testimoni.create') }}" 
               class="bg-green-500 text-white px-4 py-2 rounded">Tambah Testimoni</a>
        </div>
    </div>
@endsection