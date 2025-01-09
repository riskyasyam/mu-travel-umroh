@extends('layouts.auth')

@section('title', 'MU Travel | Login Admin')

@section('content')
<div class="flex flex-col md:flex-row min-h-screen w-full">

    <!-- Bagian Kiri: Form Login -->
    <div class="w-full md:w-1/2 flex items-center justify-center h-screen md:h-auto px-5 bg-white">
        <div class="w-full max-w-md">
            <h2 class="text-3xl font-bold text-center mb-4 font-elmessiri">LOGIN ADMIN</h2>
            <p class="text-center text-gray-600 mb-6">
                Untuk masuk ke halaman admin silahkan login terlebih dahulu
            </p>

            <!-- Notifikasi Error -->
            @if ($errors->any())
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                    <strong>Error!</strong> {{ $errors->first('email') }}
                </div>
            @endif

            <!-- Form Login -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <!-- Username Input -->
                <div>
                    <input
                        type="text"
                        name="email"
                        value="{{ old('email') }}" {{-- Untuk mengisi ulang input email --}}
                        class="w-full p-3 border border-gray-300 rounded-lg bg-grey-200 placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                        placeholder="Email"
                        required
                    />
                </div>
                <!-- Password Input -->
                <div>
                    <input
                        type="password"
                        name="password"
                        class="w-full p-3 border border-gray-300 rounded-lg bg-grey-200 placeholder-gray-500 focus:ring-2 focus:ring-orange-500 focus:outline-none"
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

    <!-- Bagian Kanan: Gambar (Sembunyi di Mobile) -->
    <div class="hidden md:block md:w-1/2 bg-cover bg-center" style="background-image: url('/assets/images/login_img.png');">
    </div>
</div>
@endsection
