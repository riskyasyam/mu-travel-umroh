@extends('layouts.auth')

@section('title', 'MU Travel | Login Admin')

@section('content')
<div class="flex flex-row min-h-screen w-full">

    <!-- Bagian Kiri: Form Login -->
    <div class="w-1/2 flex items-center justify-center">
        <div class="w-full max-w-md px-8">
            <h2 class="text-3xl font-bold text-center mb-4">LOGIN ADMIN</h2>
            <p class="text-center text-gray-600 mb-6">
                Untuk masuk ke halaman admin silahkan login terlebih dahulu
            </p>
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <!-- Username Input -->
                <div>
                    <input
                        type="text"
                        name="email"
                        class="w-full p-3 border border-gray-300 rounded-lg bg-orange-100 placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                        placeholder="Username"
                        required
                    />
                </div>
                <!-- Password Input -->
                <div>
                    <input
                        type="password"
                        name="password"
                        class="w-full p-3 border border-gray-300 rounded-lg bg-orange-100 placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                        placeholder="Password"
                        required
                    />
                </div>
                <!-- Login Button -->
                <div>
                    <button
                        type="submit"
                        class="w-full p-3 bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold rounded-lg hover:opacity-90"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bagian Kanan: Gambar -->
    <div class="w-1/2 bg-cover bg-center" style="background-image: url('/assets/images/login_img.png');">
        <!-- Anda dapat menambahkan elemen tambahan di sini jika perlu -->
    </div>
</div>
@endsection
