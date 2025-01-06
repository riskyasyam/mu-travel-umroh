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
        <!-- Navigation Links -->
        <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-gray-300 font-montserrat">Home</a></li>
            <li><a href="#" class="hover:text-gray-300 font-montserrat">Tentang MU Travel</a></li>
            <li><a href="#" class="hover:text-gray-300 font-montserrat">Paket</a></li>
            <li><a href="#" class="hover:text-gray-300 font-montserrat">Dokumentasi</a></li>
        </ul>
        <!-- Button Login -->
        <a href="{{ route('login') }}" class="bg-gradient-to-r from-gradientStart to-gradientEnd text-black py-2 px-7 rounded-2xl hover:bg-yellow-600 font-poppins font-semibold">Login</a>
    </div>
</nav>