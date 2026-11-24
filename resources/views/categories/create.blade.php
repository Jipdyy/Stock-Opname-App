@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
    <div class="flex bg-gray-200 rounded-lg px-4 py-4">
        <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
            @csrf

            <div class="pb-2">
                <label for="category_name" class="block text-lg font-medium text-gray-700 mb-1 pl-1">
                    Nama Kategori
                </label>
                <input
                    type="text"
                    id="category_name"
                    name="name"
                    required
                    class="px-2 py-1 border border-gray-300 rounded-md shadow-sm"
                    placeholder="Masukkan nama kategori..."
                >
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="category_type" class="block text-lg font-medium text-gray-700 mb-1 pl-1">
                    Tipe Kategori
                </label>
                <select
                    id="category_type"
                    name="type"
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm bg-white"
                >
                    <option value="">Pilih Tipe</option>
                    <option value="aset_tetap" @selected(old('type') === 'aset_tetap')>Aset Tetap</option>
                    <option value="habis_pakai" @selected(old('type') === 'habis_pakai')>Barang Habis Pakai</option>
                </select>
                @error('type')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="flex items-center gap-2">
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg">
                    Simpan
                </button>
                <a href="{{ route('categories.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg">
                    Batal
                </a>
            </div>
        </form>

    </div>
@endsection