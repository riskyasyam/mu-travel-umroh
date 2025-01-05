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
            // Hilangkan semua titik sebelumnya
            let value = input.value.replace(/\./g, '');

            // Konversi ke integer untuk menghindari angka nol di depan
            let numericValue = parseInt(value, 10);

            // Jika bukan angka, kosongkan input
            if (isNaN(numericValue)) {
                input.value = '';
                return;
            }

            // Format angka dengan titik pemisah ribuan
            input.value = numericValue.toLocaleString('id-ID');
        }
    </script>
    <script>
        let formModified = false;
    
        // Deteksi perubahan pada form
        document.querySelectorAll('input, textarea, select').forEach(input => {
            input.addEventListener('input', () => {
                formModified = true;
            });
        });
    
        // Konfirmasi sebelum meninggalkan halaman jika form telah diisi
        window.addEventListener('beforeunload', function (e) {
            if (formModified) {
                e.preventDefault();
                e.returnValue = 'Ingin kembali? Data tidak akan tersimpan';
            }
        });
    
        // Event untuk tombol kembali
        document.getElementById('btnKembali').addEventListener('click', function (e) {
            if (formModified) {
                let confirmLeave = confirm('Ingin kembali? Data tidak akan tersimpan');
                if (!confirmLeave) {
                    e.preventDefault();
                }
            }
        });
    </script>
</body>

</html>
