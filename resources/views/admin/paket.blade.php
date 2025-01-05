@extends('layouts.dashboard')

@section('title', 'MU Travel | Paket')

@section('content')
    <div class="flex-1 p-10">
        <h1 class="text-5xl font-bold mb-5 font-elmessiri">Halaman Paket</h1>

        <!-- Tabel Data Paket -->
        <div class="bg-white p-5 rounded-lg shadow-md">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Paket</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                        <th class="border border-gray-300 px-4 py-2">Sisa Kursi</th>
                        <th class="border border-gray-300 px-4 py-2">Harga</th>
                    <th class="border border-gray-300 px-4 py-2">Durasi</th>
                        <th class="border border-gray-300 px-4 py-2">Pesawat</th>
                        <th class="border border-gray-300 px-4 py-2">Hotel Makkah</th>
                        <th class="border border-gray-300 px-4 py-2">Hotel Madinah</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packages as $index => $package)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $package->nama_paket }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $package->tanggal }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $package->sisa_kursi }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ number_format($package->harga, 0, ',', '.') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $package->durasi }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $package->pesawat }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $package->hotel_makkah }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $package->hotel_madinah }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('admin.paket.edit', $package->id) }}" 
                                   class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                                <form action="{{ route('admin.paket.destroy', $package->id) }}" method="POST" class="inline">
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
            <a href="{{ route('admin.paket.create') }}" 
               class="bg-green-500 text-white px-4 py-2 rounded">Tambah Paket</a>
        </div>
    </div>
@endsection