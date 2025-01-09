<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <title>{{ $title ?? 'Dashboard' }} - MU Travel</title>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col lg:flex-row">
        <!-- Toggle Sidebar (Mobile) -->
        <button id="toggleSidebar" class="lg:hidden p-4 text-white bg-black">
            Menu
        </button>

        <!-- Sidebar -->
        <div id="sidebar" class="w-64 bg-black min-h-screen text-white p-5 lg:block hidden">
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
        <div class="flex-1 p-10">
            @yield('content')
        </div>
    </div>

    <script>
        // Sidebar Toggle Script
        document.getElementById('toggleSidebar').addEventListener('click', () => {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>


</html>
