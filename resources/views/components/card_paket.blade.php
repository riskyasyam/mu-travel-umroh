<section class="py-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-black">Jadwal Program Umroh</h2>
            <img src="/assets/images/element.png" alt="element" class="mx-auto mb-10">
        </div>

        <!-- Card List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($packages as $package)
                <!-- Single Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- Header -->
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-gray-800">{{ $package['nama_paket'] }}</h3>
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
                            <p class="text-sm text-gray-600">Hotel Madinah: {{ $package['hotel_madinah'] }}</p>
                            <p class="text-sm text-gray-600">Hotel Makkah: {{ $package['hotel_makkah'] }}</p>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="p-4 border-t">
                        <div class="flex items-center justify-between mb-4">
                            <!-- Airline Logo -->
                            <div class="flex items-center">
                                @if ($package['pesawat'] == 'Lion Air')
                                    <img src="/assets/images/lion-air.png" alt="Lion Air" class="h-6">
                                @else
                                    <img src="/assets/images/default-airline.png" alt="Default Airline" class="h-6">
                                @endif
                                <span class="ml-2 text-sm text-gray-800">{{ $package['pesawat'] }}</span>
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