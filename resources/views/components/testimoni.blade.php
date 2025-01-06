<section class="py-16 bg-white">
    <div id="animation-carousel" class="relative w-full max-w-4xl mx-auto" data-carousel="static">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-black font-elmessiri">Testimoni</h2>
            <img src="/assets/images/element.png" alt="element" class="mx-auto mb-10 pt-5">
        </div>
        <!-- Carousel wrapper -->
        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach($dokumentasi as $index => $item)
                    <div class="{{ $index == 0 ? 'block' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/' . $item->url_foto) }}" 
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" 
                            alt="Dokumentasi {{ $index + 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                @foreach($dokumentasi as $index => $item)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $index == 0 ? 'true' : 'false' }}" 
                        aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                @endforeach
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</section>