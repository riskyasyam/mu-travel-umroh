<section id="paket" class="py-16 bg-white">
    <div class="container mx-auto flex flex-col md:flex-col items-center px-5 md:px-0">
        <!-- Section Title -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-black font-elmessiri">Jadwal Program Umroh</h2>
            <img src="/assets/images/element.png" alt="element" class="mx-auto mb-10 pt-5">
        </div>

        <!-- Card List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($packages as $package)
                <!-- Single Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $package->foto_paket) }}" 
                    alt="{{ $package->nama_paket }}" 
                    class="w-full h-50 md:h-100 object-cover">
                    
                    <!-- Header -->
                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-gray-800 font-elmessiri">{{ $package['nama_paket'] }}</h3>
                        <p class="text-sm text-gray-600 mt-2 font-medium">{{ \Carbon\Carbon::parse($package->tanggal)->translatedFormat('d F Y') }}</p>
                    </div>

                    <!-- Details -->
                    <div class="p-4 border-t">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm bg-gray-100 rounded-lg px-3 py-1">{{ $package['durasi'] }} Hari</span>
                            <span class="text-sm bg-gray-100 rounded-lg px-3 py-1">{{ $package['sisa_kursi'] }} Kursi</span>
                        </div>
                        <hr>
                        <div class="mt-4">
                            <!-- Hotel Madinah -->
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-gray-600">Hotel Madinah: {{ $package['hotel_madinah'] }}</p>
                                <div class="flex items-center">
                                    @for ($i = 0; $i < $package['rating_madinah']; $i++)
                                        <img src="/assets/images/star.png" alt="Star" class="h-4 w-4">
                                    @endfor
                                </div>
                            </div>
                            <!-- Hotel Makkah -->
                            <div class="flex items-center justify-between mt-2">
                                <p class="text-sm text-gray-600">Hotel Makkah: {{ $package['hotel_makkah'] }}</p>
                                <div class="flex items-center">
                                    @for ($i = 0; $i < $package['rating_makkah']; $i++)
                                        <img src="/assets/images/star.png" alt="Star" class="h-4 w-4">
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="p-4 border-t">
                        <div class="flex items-center justify-between mb-4">
                            <!-- Airline Logo -->
                            <div class="flex items-center">
                                @if ($package['pesawat'] == 'Lion Air')
                                    <img src="/assets/images/lion_air.png" alt="Lion Air" class="h-10 w-auto">
                                @elseif ($package['pesawat'] == 'Citilink')
                                    <img src="/assets/images/citilink.png" alt="Citilink" class="h-10 w-auto">
                                @elseif ($package['pesawat'] == 'Garuda Indonesia')
                                    <img src="/assets/images/garuda.png" alt="Citilink" class="h-10 w-auto">
                                @elseif ($package['pesawat'] == 'Emirates')
                                    <img src="/assets/images/emirates.png" alt="Citilink" class="h-10 w-auto">
                                @endif
                            </div>
                            <!-- Price -->
                            <div class="text-right">
                                <p class="text-sm text-gray-600">Harga Mulai:</p>
                                <p class="text-xl font-semibold text-black font-elmessiri">Rp{{ number_format($package->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <!-- Booking Button -->
                        <a href="https://wa.me/081234550234" class="font-semibold block text-center bg-gradient-to-r from-gradientStart to-gradientEnd text-white py-2 rounded-md hover:bg-yellow-600">
                            Booking Sekarang
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>