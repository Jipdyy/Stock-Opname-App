@extends('layouts.guest')

@section('title', 'Masuk ke Akun')

@section('content')
    <h4 class="mb-4 text-center fw-semibold">
        Silakan Masuk
    </h4>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="mb-3">
             <label for="email" class="form-label mb-2">
                Email
             </label>
             <input type="email" class="form-control" id="email" name="email" placeholder="nama@contoh.com" required autofocus>
        </div>

        <div class="mb-3">
             <label for="password" class="form-label mb-2">
                Password
             </label>
             <input type="password" class="form-control" id="password" name="password" required autofocus>
        </div>

        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-dark py-2">
                Masuk
            </button>
        </div>

    </form>
@endsection