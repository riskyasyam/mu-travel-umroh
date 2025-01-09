@extends('layouts.dashboard')
@section('title', 'MU Travel | Paket')
@section('content')
    <div class="flex-1 p-4 md:p-10">
        <h1 class="text-3xl md:text-5xl font-bold mb-5 font-elmessiri">Halaman Paket</h1>

        <!-- Tabel Data Paket -->
        <div class="bg-white p-5 rounded-lg shadow-md overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300 min-w-max">
                <thead class="bg-gray-100">
                    <tr class="text-sm md:text-base">
                        <th class="border border-gray-300 px-2 md:px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Nama Paket</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Tanggal</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Sisa Kursi</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Harga</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Durasi</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Pesawat</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Hotel Makkah</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Hotel Madinah</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Foto Paket</th>
                        <th class="border border-gray-300 px-2 md:px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packages as $index => $package)
                        <tr class="text-xs md:text-base">
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->nama_paket }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->tanggal }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->sisa_kursi }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ number_format($package->harga, 0, ',', '.') }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->durasi }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->pesawat }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->hotel_makkah }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->hotel_madinah }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2">{{ $package->foto_paket }}</td>
                            <td class="border border-gray-300 px-2 md:px-4 py-2 flex flex-col md:flex-row gap-2">
                                <a href="{{ route('admin.paket.edit', $package->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded text-center">Edit</a>
                                <form action="{{ route('admin.paket.destroy', $package->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-center"
                                        onclick="return confirm('Yakin ingin menghapus paket ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tombol Tambah Paket -->
        <div class="mt-5 text-center md:text-left">
            <a href="{{ route('admin.paket.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Paket</a>
        </div>
    </div>
@endsection
