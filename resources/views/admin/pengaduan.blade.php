@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('title', 'Kelola Pengaduan - Admin Desa Ciakar')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Kelola Pengaduan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Pengaduan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #667eea;
            --primary-dark: #5a67d8;
            --secondary-color: #764ba2;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --shadow-md: 0 10px 25px rgba(0,0,0,0.1);
            --shadow-xl: 0 25px 50px rgba(0,0,0,0.15);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8fafc;
            color: #2d3748;
        }

        .admin-header {
            background: var(--gradient-primary);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }

        .admin-nav {
            background: white;
            box-shadow: var(--shadow-md);
            padding: 1rem 0;
            margin-bottom: 2rem;
        }

        .nav-pills .nav-link {
            border-radius: 12px;
            margin: 0 0.25rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link.active {
            background: var(--gradient-primary);
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
        }

        .card-header {
            background: var(--gradient-primary);
            color: white;
            border-radius: 16px 16px 0 0 !important;
            padding: 1.5rem;
        }

        .stats-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.5rem 0.75rem;
            border-radius: 8px;
        }

        .badge-pending {
            background: #3b82f6;
            color: white;
        }

        .badge-diproses {
            background: #f59e0b;
            color: white;
        }

        .badge-selesai {
            background: #10b981;
            color: white;
        }

        .badge-ditolak {
            background: #ef4444;
            color: white;
        }

        .btn-action {
            padding: 0.375rem 0.75rem;
            border-radius: 8px;
            font-size: 0.875rem;
            margin: 0 0.125rem;
        }

        .table {
            border-radius: 12px;
            overflow: hidden;
        }

        .table th {
            background: #f8fafc;
            border: none;
            font-weight: 600;
            color: #4a5568;
            padding: 1rem;
        }

        .table td {
            border: none;
            padding: 1rem;
            vertical-align: middle;
        }

        .table tbody tr {
            border-bottom: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: #f7fafc;
        }

        .logout-btn {
            background: #ef4444;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: #dc2626;
            color: white;
        }

        /* Fix dropdown z-index issue */
        .btn-group .dropdown-menu {
            z-index: 1050 !important;
            position: absolute !important;
        }

        .btn-group {
            position: relative;
        }

        /* Ensure table container doesn't clip dropdown */
        .table-responsive {
            overflow: visible !important;
        }

        .card-body {
            overflow: visible !important;
        }
    </style>
</head>

    <!-- Main Content -->
    <div class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <h2 class="mb-0">
                        <i class="fas fa-tachometer-alt me-3"></i>
                        Panel Admin Pengaduan
                    </h2>
                    <p class="mb-0 mt-2 text-muted">Kelola pengaduan masyarakat</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <span class="me-3">
                        <i class="fas fa-user me-2"></i>
                        Selamat datang, Admin
                    </span>
                    <a href="{{ route('admin.logout') }}" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="admin-nav">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.berita') }}">
                        <i class="fas fa-newspaper me-2"></i>Manajemen Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.pengaduan') }}">
                        <i class="fas fa-comments me-2"></i>Pengaduan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">
                        <i class="fas fa-home me-2"></i>Lihat Website
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <!-- Statistics Cards -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ $stats['total'] ?? 0 }}</div>
                    <h6 class="text-muted mb-0">Total Pengaduan</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ $stats['pending'] ?? 0 }}</div>
                    <h6 class="text-muted mb-0">Pengaduan Pending</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ $stats['diproses'] ?? 0 }}</div>
                    <h6 class="text-muted mb-0">Diproses</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ $stats['selesai'] ?? 0 }}</div>
                    <h6 class="text-muted mb-0">Selesai</h6>
                </div>
            </div>
        </div>

        <!-- Pengaduan Table -->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">
                            <i class="fas fa-list me-2"></i>
                            Daftar Pengaduan
                        </h5>
                    </div>
                    <div class="col-auto">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-light btn-sm" onclick="filterStatus('semua')">
                                Semua
                            </button>
                            <button type="button" class="btn btn-light btn-sm" onclick="filterStatus('pending')">
                                Pending
                            </button>
                            <button type="button" class="btn btn-light btn-sm" onclick="filterStatus('diproses')">
                                Diproses
                            </button>
                            <button type="button" class="btn btn-light btn-sm" onclick="filterStatus('ditolak')">
                                Ditolak
                            </button>
                            <button type="button" class="btn btn-light btn-sm" onclick="filterStatus('selesai')">
                                Selesai
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover" id="pengaduanTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Prioritas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengaduan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>{{ $item->display_name }}</td>
                                <td>{{ ucfirst($item->kategori) }}</td>
                                <td>{{ Str::limit($item->judul, 30) }}</td>
                                <td><span class="badge {{ $item->priority_badge }}">{{ ucfirst($item->prioritas) }}</span></td>
                                <td><span class="badge {{ $item->status_badge }}">{{ ucfirst($item->status) }}</span></td>
                                <td>
                                    <a href="{{ route('admin.pengaduan.detail', $item->id) }}" class="btn btn-primary btn-action">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div class="btn-group">
                                        <button class="btn btn-success btn-action dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" onclick="updateStatus(event, {{ $item->id }}, 'pending')">Pending</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateStatus(event, {{ $item->id }}, 'diproses')">Diproses</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateStatus(event, {{ $item->id }}, 'selesai')">Selesai</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateStatus(event, {{ $item->id }}, 'ditolak')">Ditolak</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <div class="text-muted">
                                        <i class="fas fa-inbox fa-3x mb-3"></i>
                                        <p>Belum ada pengaduan yang masuk</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-info-circle me-2"></i>
                        Detail Pengaduan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="detailContent">
                    <!-- Detail content will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json'
                },
                pageLength: 10,
                order: [[0, 'desc']]
            });
        });

        function viewDetail(id) {
            // Sample detail data
            const details = {
                1: {
                    nama: 'Ahmad Suryadi',
                    nik: '3601234567890123',
                    telepon: '081234567890',
                    email: 'ahmad@email.com',
                    alamat: 'RT 03/RW 02, Dusun Ciakar',
                    kategori: 'Infrastruktur',
                    prioritas: 'Tinggi',
                    lokasi: 'Jalan Utama RT 03',
                    judul: 'Jalan Rusak di RT 03',
                    isi: 'Jalan di RT 03 mengalami kerusakan parah dengan banyak lubang yang membahayakan pengendara. Mohon segera diperbaiki.',
                    tanggal: '15 Januari 2024',
                    status: 'Diproses'
                },
                2: {
                    nama: 'Siti Nurhaliza',
                    nik: '3601234567890124',
                    telepon: '081234567891',
                    email: 'siti@email.com',
                    alamat: 'RT 02/RW 01, Dusun Ciakar',
                    kategori: 'Infrastruktur',
                    prioritas: 'Sedang',
                    lokasi: 'Jalan Masjid RT 02',
                    judul: 'Lampu Jalan Mati',
                    isi: 'Lampu jalan di depan masjid sudah mati selama 3 hari, membuat jalan gelap di malam hari.',
                    tanggal: '14 Januari 2024',
                    status: 'Selesai'
                },
                3: {
                    nama: 'Budi Santoso',
                    nik: '3601234567890125',
                    telepon: '081234567892',
                    email: 'budi@email.com',
                    alamat: 'RT 01/RW 01, Dusun Ciakar',
                    kategori: 'Lingkungan',
                    prioritas: 'Darurat',
                    lokasi: 'TPS Dusun Ciakar',
                    judul: 'Sampah Menumpuk di TPS',
                    isi: 'Sampah di TPS sudah menumpuk tinggi dan mulai berbau. Perlu segera diangkut karena mengganggu kesehatan warga.',
                    tanggal: '13 Januari 2024',
                    status: 'Pending'
                }
            };

            const detail = details[id];
            if (detail) {
                const content = `
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Data Pelapor</h6>
                            <table class="table table-borderless">
                                <tr><td><strong>Nama:</strong></td><td>${detail.nama}</td></tr>
                                <tr><td><strong>NIK:</strong></td><td>${detail.nik}</td></tr>
                                <tr><td><strong>Telepon:</strong></td><td>${detail.telepon}</td></tr>
                                <tr><td><strong>Email:</strong></td><td>${detail.email}</td></tr>
                                <tr><td><strong>Alamat:</strong></td><td>${detail.alamat}</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6>Data Pengaduan</h6>
                            <table class="table table-borderless">
                                <tr><td><strong>Kategori:</strong></td><td>${detail.kategori}</td></tr>
                                <tr><td><strong>Prioritas:</strong></td><td>${detail.prioritas}</td></tr>
                                <tr><td><strong>Lokasi:</strong></td><td>${detail.lokasi}</td></tr>
                                <tr><td><strong>Tanggal:</strong></td><td>${detail.tanggal}</td></tr>
                                <tr><td><strong>Status:</strong></td><td>${detail.status}</td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <h6>Judul Pengaduan</h6>
                            <p>${detail.judul}</p>
                            <h6>Isi Pengaduan</h6>
                            <p>${detail.isi}</p>
                        </div>
                    </div>
                `;
                
                document.getElementById('detailContent').innerHTML = content;
                new bootstrap.Modal(document.getElementById('detailModal')).show();
            }
        }

        function updateStatus(event, id, status) {
            event.preventDefault();
            event.stopPropagation();
            
            if (confirm('Apakah Anda yakin ingin mengubah status pengaduan ini?')) {
                // Here you would make an AJAX call to update the status
                alert(`Status pengaduan ID ${id} berhasil diubah menjadi ${status}`);
                // Reload the page or update the table
                location.reload();
            }
        }

        function filterStatus(status) {
            const table = $('#pengaduanTable').DataTable();
            if (status === 'semua') {
                table.column(6).search('').draw();
            } else if (status === 'pending') {
                table.column(6).search('Pending').draw();
            } else if (status === 'diproses') {
                table.column(6).search('Diproses').draw();
            } else if (status === 'selesai') {
                table.column(6).search('Selesai').draw();
            } else if (status === 'ditolak') {
                table.column(6).search('Ditolak').draw();
            }
        }
    </script>
@endsection