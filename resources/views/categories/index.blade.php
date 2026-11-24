@extends('layouts.app')

@section('title', 'Kategori - Stock Opname Skanja')
    
@section('content')
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-6">
        <div>
            <nav class="flex items-center gap-1 text-sm text-gray-500 mb-1">
                <a href="{{ route('dashboard') }}" class="hover:text-primary-600">Dashboard</a>
                <span>/</span>
                <span class="text-gray-900 font-medium">Kategori</span>
            </nav>
            <h1 class="text-xl font-bold text-gray-900 tracking-tight">
                Kategori
            </h1>
            <p class="text-sm text-gray-500">
                Kelola kelompok aset dan barang habis pakai.
            </p>
        </div>

        <a href="{{ route('categories.create') }}">
            <button
                type="button"
                class="items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium shadow-xs"
            >
                Tambah Kategori
            </button>
        </a>
    </div>

    <div class="relative overflow-hidden bg-white rounded-lg border border-gray-200">
        <form action="{{ route('categories.index') }}" method="GET" class="p-2 flex flex-col md:flex-row items-stretch md:items-center gap-3">
            <div class="relative flex-1 max-w-sm pb-2 pl-4">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                </div>
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari nama kategori..."
                    class="pl-3 text-sm bg-gray-50 border-gray-300 rounded-lg w-full p-2.5"
                >
            </div>
            <div class="pl-4 pb-4 flex items-center gap-2">
                <button type="submit" class="text-gray-800 bg-white border border-gray-500 hover:bg-gray-200 font-medium rounded-lg text-sm px-3 py-2">
                    Cari
                </button>
                @if (request('search'))
                    <a href="{{ route('categories.index') }}" class="text-sm text-gray-500 hover:text-gray-700 px-2 py-2">
                        Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <div class="overflow-x-auto w-full">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4" scope="col">Nama Kategori</th>
                        <th class="py-3 px-4" scope="col">Tipe</th>
                        <th class="py-3 px-4 text-right" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($categories as $category)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                            <td class="py-3 px-4 font-medium text-gray-900">
                                {{ $category->name }}
                            </td>
                            <td class="py-3 px-4">
                                @if ($category->type === "aset_tetap")
                                    <span class="px-2.5 py-1 text-xs font-medium rounded-full bg-indigo-50 text-indigo-700">
                                        Aset Tetap
                                    </span>
                                @else
                                    <span class="px-2.5 py-1 text-xs font-medium rounded-full bg-indigo-50 text-indigo-700">
                                        Barang Habis Pakai
                                    </span>
                                @endif
                            </td>
                            <td class="py-3 px-4 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <a
                                        href="{{ route('categories.show', $category) }}"
                                        class="p-1.5 rounded-lg text-gray-500 hover:text-blue-600 hover:bg-gray-100"
                                        title="Lihat Detail"
                                    >
                                        🔎
                                    </a>

                                    <button
                                        type="button"
                                        class="p-1.5 rounded-lg text-gray-500 hover:text-blue-600 hover:bg-gray-100"
                                        title="Edit Kategori"
                                    >
                                        ✏️
                                    </button>
                                    
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="p-1.5 rounded-lg text-gray-500 hover:text-rose-600 hover:bg-gray-100"
                                            title="Hapus Kategori"
                                        >
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-10 text-center text-gray-500">
                                Belum ada kategori. Klik "Tambah Kategori" untuk membuat yang pertama.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
@endsection