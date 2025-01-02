<section class="py-16 bg-white">
    <div class="container mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-black font-elmessiri">Jadwal Program Umroh</h2>
            <img src="/assets/images/element.png" alt="element" class="mx-auto mb-10 pt-5">
        </div>

        <!-- Card List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($packages as $package)
                <!-- Single Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ $package['foto_paket'] }}" alt="{{ $package['nama_paket'] }}" class="w-full h-45 object-cover">
                    <!-- Header -->
                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-gray-800 font-elmessiri">{{ $package['nama_paket'] }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $package['tanggal'] }}</p>
                    </div>

                    <!-- Details -->
                    <div class="p-4 border-t">
                        <div class="flex justify-between mb-2">
                            <span class="text-sm bg-gray-100 rounded-lg px-3 py-1">{{ $package['durasi'] }}</span>
                            <span class="text-sm bg-gray-100 rounded-lg px-3 py-1">{{ $package['sisa_kursi'] }}</span>
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
                                <p class="text-lg font-bold text-black">{{ $package['harga'] }}</p>
                            </div>
                        </div>
                        <!-- Booking Button -->
                        <a href="#" class="block text-center bg-gradient-to-r from-gradientStart to-gradientEnd text-black py-2 rounded-md hover:bg-yellow-600">
                            Booking Sekarang
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>