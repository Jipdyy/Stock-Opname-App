<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-Opname Sekolah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    @include('components.sidebar')
    
    <div class="sm:ml-64 min-h-screen flex flex-col">
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-grow w-full">
            @yield('content')
        </main>

        <footer class="bg-white border-t border-gray-200 py-4 text-center text-sm text-gray-500">
            © {{ date('Y') }} Inventaris Sekolah. All rights reserved.
        </footer>
    </div>
    @stack('scripts')
</body>
</html>