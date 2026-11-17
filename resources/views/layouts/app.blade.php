<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Stock Opname Skanja')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
</head>
<body>
    <div id="app">
        @include('components.navbar')

        <main class="py-4 container">
            @yield('content')
        </main>

        <footer class="text-center py-3 bg-light mt-auto">
            <p>© 2026 Inventaris Skanja</p>
        </footer>
    </div>
</body>
</html>