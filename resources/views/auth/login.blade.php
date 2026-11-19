@extends('layouts.guest')

@section('title', 'Masuk - Stock-Opname')

@section('content')
<form method="POST" action="{{ route('login') }}" class="space-y-4">
    @csrf

    <div>
        <label for="email" class="block text-md font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm mb-2 px-2.5 py-2" placeholder="nama@gmail.com">
        @error('email')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password" class="block text-md font-medium text-gray-700 mb-1">Kata Sandi</label>
        <input type="password" id="password" name="password" required class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm py-2 px-2.5 mb-2" placeholder="•••••">
        @error('password')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    {{-- <div class="flex items-center justify-between text-sm">
        <label class="flex items-center">
            <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
            <span class="ml-2 text-gray-600">Ingat Saya</span>
        </label>
    </div> --}}

    <div>
        <button type="submit" class="w-full py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
            Masuk
        </button>
    </div>
</form>
@endsection