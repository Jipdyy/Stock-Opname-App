<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Stock-Opname</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Inventaris Skanja</h2>
            <p class="text-sm text-gray-500">Aplikasi Stock Opname Inventaris</p>
        </div>

        <div class="w-full max-w-xs bg-white shadow-sm border border-gray-200 rounded-2xl p-6 sm:p-8 sm:py-8">
            @yield('content')
        </div>

        <div class="mt-6 text-center text-xs text-gray-400">
            © {{ date('Y') }} SMK Negeri 1 Jatiroto
        </div>
    </div>
    @stack('scripts')
</body>
</html>