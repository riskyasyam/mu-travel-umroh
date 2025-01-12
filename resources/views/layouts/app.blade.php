<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body class="font-sans antialiased">
    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const player = new Plyr('#player');
        });
    </script>
</body>
</html>