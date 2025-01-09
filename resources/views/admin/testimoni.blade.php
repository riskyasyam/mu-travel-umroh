@extends('layouts.dashboard')

@section('title', 'MU Travel | Testimoni')

@section('content')
    <div class="flex-1 p-5 md:p-10">
        <h1 class="text-3xl md:text-5xl font-bold mb-5 font-elmessiri">Testimoni</h1>

        <!-- Tabel Data Testimoni -->
        <div class="bg-white p-5 rounded-lg shadow-md overflow-x-auto">
            <table class="w-full min-w-max border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Media</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimoni as $index => $testimoni)
                        <tr>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $index + 1 }}</td>
                            <td class="py-2 px-2 md:px-4 border-b">
                                @if ($testimoni->type == 'image')
                                    <img src="{{ asset('storage/' . $testimoni->file) }}" alt="Testimoni" class="w-32 h-32 md:w-48 md:h-48 object-cover">
                                @else
                                    <video width="200" class="w-32 h-32 md:w-48 md:h-48" controls>
                                        <source src="{{ asset('storage/' . $testimoni->file) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </td>                            
                            <td class="border border-gray-300 px-2 md:px-4 py-2 flex flex-col md:flex-row gap-2">
                                <a href="{{ route('admin.testimoni.edit', $testimoni->id) }}" 
                                   class="bg-yellow-500 text-white px-3 py-1 rounded text-xs md:text-lg">Edit</a>
                                <form action="{{ route('admin.testimoni.destroy', $testimoni->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-xs md:text-lg"
                                        onclick="return confirm('Yakin ingin menghapus testimoni ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tombol Tambah Testimoni -->
        <div class="mt-5">
            <a href="{{ route('admin.testimoni.create') }}" 
               class="bg-green-500 text-white px-3 md:px-4 py-2 rounded text-xs md:text-lg">Tambah Testimoni</a>
        </div>
    </div>
@endsection
