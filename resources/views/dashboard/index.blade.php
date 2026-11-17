@extends('layouts.app')

@section('title', 'Dashboard - Stock Opname Inventaris')

@section('content')
<div class="container-fluid px-4">
    
    <!-- 1. Bagian Header / Sambutan -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="p-4 bg-white rounded-4 shadow-sm border-0">
                <h3 class="fw-bold text-dark">Dashboard Utama</h3>
                <p class="text-muted mb-0">
                    Halo, <strong>{{ auth()->user()->name }}</strong>! Anda masuk sebagai 
                    <span class="badge bg-secondary text-uppercase">{{ auth()->user()->role }}</span>. 
                    Berikut adalah ringkasan sistem inventaris sekolah saat ini.
                </p>
            </div>
        </div>
    </div>

    <!-- 2. Bagian Kartu Statistik / Ringkasan (Cards Summary) -->
    <div class="row g-4 mb-4">
        <!-- Kotak 1: Total Aset Tetap -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 text-uppercase small fw-bold">Total Aset Tetap</h6>
                            <h2 class="fw-bold mb-0">1,245</h2>
                        </div>
                        <div class="fs-1 text-white-50">
                            <i class="bi bi-box-seam"></i> <!-- Bisa diisiikon Bootstrap Icons -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak 2: Total Ruangan / Lokasi -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 text-uppercase small fw-bold">Total Ruangan</h6>
                            <h2 class="fw-bold mb-0">28</h2>
                        </div>
                        <div class="fs-1 text-white-50">
                            <i class="bi bi-building"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak 3: Sesi Opname Aktif -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 bg-warning text-dark h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-uppercase small fw-bold text-black-50">Sesi Opname Berjalan</h6>
                            <h2 class="fw-bold mb-0">1</h2>
                        </div>
                        <div class="fs-1 text-black-50">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak 4: Aset Bermasalah / Rusak -->
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 bg-danger text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50 text-uppercase small fw-bold">Aset Rusak / Hilang</h6>
                            <h2 class="fw-bold mb-0">12</h2>
                        </div>
                        <div class="fs-1 text-white-50">
                            <i class="bi bi-exclamation-triangle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Bagian Tabel Aktivitas / Sesi Opname Terbaru -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-white py-3 border-0">
                    <h5 class="fw-bold mb-0 text-dark">Status Sesi Stock Opname Terbaru</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Judul Sesi</th>
                                    <th>Periode</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Opname Semester Ganjil 2026/2027</td>
                                    <td>Desember 2026</td>
                                    <td><span class="badge bg-warning text-dark">Berjalan</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection