<section class="py-10 mt-10 bg-cover bg-center bg-no-repeat bg-white">
    <div class="container mx-auto text-center">
        <!-- Judul Section -->
        <h2 class="text-4xl font-bold text-black mb-2 font-elmessiri">Perlengkapan Umroh</h2>
        <p class="text-lg text-black mb-6 font-poppins">Persiapkan perjalanan spiritual Anda dengan perlengkapan terbaik</p>
        <img src="/assets/images/element.png" alt="element" class="mx-auto mb-6">

        <!-- Row untuk Video & Gambar -->
        <div class="flex flex-col md:flex-row justify-center items-center md:justify-between gap-3">
            <!-- Video Player -->
            <div class="w-full md:w-1/2 flex justify-center">
                <video id="player" class="plyr-video w-full max-w-[360px] md:max-w-full md:h-[300px] lg:h-[400px] rounded-lg shadow-lg" playsinline controls>
                    <source src="{{ asset('/assets/images/perlengkapan.mp4') }}" type="video/mp4">
                </video>
            </div>

            <!-- Gambar Perlengkapan -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="/assets/images/perlengkapan.png" alt="Perlengkapan Umroh"
                    class="w-full max-w-[500] md:max-w-full md:h-[300px] lg:h-[400px] object-contain rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>
