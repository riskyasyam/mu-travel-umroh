<nav class="bg-black text-white relative top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-5 px-5">
        <!-- Logo dan Nama Travel -->
        <div class="flex items-center">
            <img src="/assets/images/logo.png" alt="Logo MU Travel" class="h-10">
            <div class="ml-3">
                <p class="text-transparent bg-clip-text bg-gradient-to-r from-gradientStart to-gradientEnd text-lg font-bold">MU Travel</p>
                <p class="text-transparent bg-clip-text bg-gradient-to-r from-gradientStart to-gradientEnd text-xs font-petrona">PT MUKHTARA INDONESIA UTAMA</p>
                <p class="text-transparent bg-clip-text bg-white text-xs font-petrona">PPIU No. 91201044207990001 / 2024</p>
            </div>
        </div>
        
        <!-- Hamburger Menu (Mobile) -->
        <button id="menu-toggle" class="lg:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        
        <!-- Navigation Links -->
        <ul id="nav-links" class="hidden lg:flex space-x-6">
            <li><a href="#hero" class="hover:text-gray-300 font-montserrat">Home</a></li>
            <li><a href="#tentang" class="hover:text-gray-300 font-montserrat">Tentang MU Travel</a></li>
            <li><a href="#paket" class="hover:text-gray-300 font-montserrat">Paket</a></li>
            <li><a href="#dokumentasi" class="hover:text-gray-300 font-montserrat">Dokumentasi</a></li>
            <li><a href="#testimoni" class="hover:text-gray-300 font-montserrat">Testimoni</a></li>
        </ul>
        
        <!-- Button Login -->
        <a href="{{ route('login') }}" class="hidden lg:block bg-gradient-to-r from-gradientStart to-gradientEnd text-black py-2 px-7 rounded-2xl hover:bg-yellow-600 font-poppins font-semibold">Login</a>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-black text-white px-5 py-4 space-y-2">
        <a href="#hero" class="block hover:text-gray-300 font-montserrat">Home</a>
        <a href="#tentang" class="block hover:text-gray-300 font-montserrat">Tentang MU Travel</a>
        <a href="#paket" class="block hover:text-gray-300 font-montserrat">Paket</a>
        <a href="#dokumentasi" class="block hover:text-gray-300 font-montserrat">Dokumentasi</a>
        <a href="#testimoni" class="block hover:text-gray-300 font-montserrat">Testimoni</a>
        <a href="{{ route('login') }}" class="block bg-gradient-to-r from-gradientStart to-gradientEnd text-black py-2 px-7 rounded-2xl text-center hover:bg-yellow-600 font-poppins font-semibold">Login</a>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
