<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    <title>{{ $title ?? 'Authentication' }} - MU Travel</title>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        @yield('content')
    </div>
</body>
</html>