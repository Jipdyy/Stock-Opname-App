@extends('layouts.app')

@section('title', 'Dashboard - Stock Opname Inventaris')

@section('content')
<div class="space-y-4 space-x-1">
    <div>
        <h1 class="text-xl font-semibold text-blue-600">Dashboard</h1>
    </div>

    <div class="grid gap-3 sm:grid-cols-4">
        <div class="rounded-lg border border-grey-400 bg-white p-4">
            <p class="text-xs text-gray-500 dark:text-gray-400">Total aset terdaftar</p>
            <p class="mt-1 text-2xl font-bold text-blue-800">
                2221 unit
            </p>
        </div>

        <div class="rounded-lg border border-grey-400 bg-white p-4">
            <p class="text-xs text-gray-500 dark:text-gray-400">Barang sesuai</p>
            <p class="mt-1 text-2xl font-bold text-green-500">
                222 unit
            </p>
        </div>

        <div class="rounded-lg border border-grey-400 bg-white p-4">
            <p class="text-xs text-gray-500 dark:text-gray-400">Barang rusak</p>
            <p class="mt-1 text-2xl font-bold text-blue-700">
                222 unit
            </p>
        </div>

        <div class="rounded-lg border border-grey-400 bg-white p-4">
            <p class="text-xs text-gray-500 dark:text-gray-400">Barang hilang</p>
            <p class="mt-1 text-2xl font-bold text-red-500">
                222 unit
            </p>
        </div>
    </div>

    <div class="grid gap-3 sm:grid-cols-2 mt-8">
        <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-lg font-bold text-slate-800">
                        Progres Opname per Ruangan
                    </h2>
                    <p class="tet-xs text-slate-500 mt-0.5"> Update dari verifikasi petugas lapangan</p>
                </div>
                <div class="flex items-center gap-3">
                    <label for="" class="text-xs font-meidum text-slate-500">Filter Unit:</label>
                    <select id="filter-lokasi" class="text-xs font-medium text-slate-700 bg-white border border-slate-200 rounded-lg pl-2 pr-7 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option>Semua Lokasi</option>
                    </select>
                </div>
            </div>
            <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-100 text-[11px] font-semibold uppercase tracking-wider text-slate-400">
                        <th class="py-3.5 px-5">Ruangan / Unit Sarpras</th>
                        <th class="py-3.5 px-4">Petugas Lapangan</th>
                        <th class="py-3.5 px-4 text-center">Realisasi Target</th>
                        <th class="py-3.5 px-4">Progres</th>
                        <th class="py-3.5 px-5 text-center">Status Audit</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    <tr class="hover:bg-slate-50/70 transition-colors">
                        <td class="py-4 px-5">
                            <div class="flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 mt-0.5">
                                    
                                </div>
                                <div>
                                    <div class="font-semibold text-slate-800 leading-snug">Lab Komputer B</div>
                                    <div class="text-xs text-slate-400 mt-0.5">Gedung B, Lantai 2</div>
                                </div>
                            </div>
                        </td>

                        <td class="py-4 px-4">
                            <div class="font-medium text-slate-700 leading-snug">Ahmad Fauzi, S.Kom</div>
                            <div class="text-xs text-slate-400 mt-0.5">Petugas TI</div>
                        </td>

                        <td class="py-4 px-4 text-center">
                            <div class="font-bold text-slate-800">45 <span class="text-slate-400 font-normal">/</span> 45</div>
                            <div class="text-xs text-slate-400 mt-0.5">Laptop Client</div>
                        </td>

                        <td class="py-4 px-5 text-center whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-600">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                Selesai
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection