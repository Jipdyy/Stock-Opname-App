<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <!-- 1. Brand / Logo Aplikasi -->
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-box-seam me-1"></i> SI-Opname Sekolah
        </a>

        <!-- Tombol Toggler untuk tampilan HP (Responsive Hamburger Menu) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- 2. Menu Navigasi Utama -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <!-- Menu Dashboard Umum (Semua Role bisa akses) -->
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>

                <!-- Menu Khusus ADMIN: Kelola Master Data -->
                @if(auth()->check() && auth()->user()->isAdmin())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Master Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kategori Barang</a></li>
                            <li><a class="dropdown-item" href="#">Data Ruangan / Lokasi</a></li>
                            <li><a class="dropdown-item" href="#">Data Aset Tetap</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kelola Sesi Opname</a>
                    </li>
                @endif

                <!-- Menu untuk PETUGAS (Officer) & Admin -->
                @if(auth()->check() && (auth()->user()->isAdmin() || auth()->user()->isOfficer()))
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cek Fisik Lapangan</a>
                    </li>
                @endif

                <!-- Menu untuk KEPALA SEKOLAH (Headmaster) & Admin -->
                @if(auth()->check() && (auth()->user()->isAdmin() || auth()->user()->isHeadmaster()))
                    <li class="nav-item">
                        <a class="nav-link" href="#">Persetujuan & Laporan</a>
                    </li>
                @endif

            </ul>

            <!-- 3. Bagian Kanan: Profil User & Tombol Logout -->
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- Menampilkan nama user yang sedang login -->
                            <span class="badge bg-secondary me-1 text-uppercase">{{ auth()->user()->role }}</span>
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profil Saya</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <!-- Form Logout wajib menggunakan method POST di Laravel untuk keamanan -->
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Keluar (Logout)</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>