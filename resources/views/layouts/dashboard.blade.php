<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <title>{{ $title ?? 'Dashboard' }} - MU Travel</title>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-r from-gradientStart to-gradientEnd min-h-screen text-white p-5">
            <h2 class="text-2xl font-bold mb-5">Admin MU Travel</h2>
            <ul>
                <li class="mb-2"><a href="{{ route('admin.dashboard') }}"
                        class="block py-2 px-4 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-yellow-500' : 'hover:bg-yellow-500' }}">Dashboard</a>
                </li>
                <li class="mb-2"><a href="{{ route('admin.paket') }}"
                        class="block py-2 px-4 rounded-lg {{ request()->routeIs('admin.paket') ? 'bg-yellow-500' : 'hover:bg-yellow-500' }}">Paket</a>
                </li>
                <li class="mb-2"><a href="{{ route('admin.dokumentasi') }}"
                        class="block py-2 px-4 rounded-lg {{ request()->routeIs('admin.dokumentasi') ? 'bg-yellow-500' : 'hover:bg-yellow-500' }}">Dokumentasi</a>
                </li>
                <li class="mb-2"><a href="{{ route('admin.testimoni') }}"
                    class="block py-2 px-4 rounded-lg {{ request()->routeIs('admin.testimoni') ? 'bg-yellow-500' : 'hover:bg-yellow-500' }}">Testimoni</a>
                </li>
                <li class="mb-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block py-2 px-4 rounded-lg hover:bg-red-500 w-full text-left">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Content -->
        @yield('content')
    </div>
    <script>
        function formatHarga(input) {
            // Ambil hanya angka, hapus titik dan karakter non-digit
            let value = input.value.replace(/\D/g, '');

            // Konversi ke integer untuk menghindari angka nol di depan
            let numericValue = parseInt(value, 10);

            // Jika bukan angka, kosongkan input
            if (isNaN(numericValue)) {
                input.value = '';
                document.getElementById('harga').value = '';
                return;
            }

            // Format angka dengan titik pemisah ribuan
            input.value = numericValue.toLocaleString('id-ID');

            // Simpan angka tanpa titik ke hidden input untuk dikirim ke backend
            document.getElementById('harga').value = numericValue;
        }
    </script>

</body>

</html>
