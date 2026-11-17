<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Stock Opname Skanja</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
</head>
<body class="bg-light">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark">Inventaris Skanja</h2>
            <p class="text-muted">Aplikasi Stock Opname Inventaris</p>
        </div>

        <div class="w-100" style="max-width: 420px;">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 p-sm-5">
                    @yield('content')
                </div>
            </div>
        </div>

        <div class="text-center mt-4 text-muted small">
            © {{ date('Y') }} Inventaris Sekolah. All rights reserved.
        </div>
    </div>

    @stack('scripts')
</body>
</html>