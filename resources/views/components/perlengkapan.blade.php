<section class="py-10 mt-10 bg-cover bg-center bg-no-repeat bg-white" style="">
    <div class="container mx-auto text-center">
        <!-- Judul Section -->
        <h2 class="text-4xl font-bold text-black mb-2 font-elmessiri">Perlengkapan Umroh</h2>
        <p class="text-lg text-black mb-6 font-poppins">Persiapkan perjalanan spiritual Anda dengan perlengkapan terbaik</p>
        <img src="/assets/images/element.png" alt="element" class="mx-auto mb-6"> 

        <!-- Row untuk Video & Gambar -->
        <div class="flex flex-col md:flex-row justify-center items-center md:justify-between">
            <!-- Video Player -->
            <div class="w-auto md:w-[360px] flex justify-end">
                <video id="player" class="plyr-video w-full h-[640px] rounded-lg shadow-lg" playsinline controls>
                    <source src="{{ asset('/assets/images/perlengkapan.mp4') }}" type="video/mp4">
                </video>
            </div>
            
            <!-- Gambar Perlengkapan -->
            <div class="w-auto md:w-[420px] flex justify-start">
                <img src="/assets/images/perlengkapan.png" alt="Perlengkapan Umroh" class="h-[640px] object-cover rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>
