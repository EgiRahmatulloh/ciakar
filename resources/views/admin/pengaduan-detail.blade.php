@extends('layouts.app')
@section('title', 'Detail Pengaduan')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Detail Pengaduan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/admin/pengaduan') }}">Admin Pengaduan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<style>
        :root {
            --primary-color: #667eea;
            --primary-dark: #5a67d8;
            --secondary-color: #764ba2;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --shadow-md: 0 10px 25px rgba(0,0,0,0.1);
            --shadow-xl: 0 25px 50px rgba(0,0,0,0.15);
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

        .badge {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
        }

        .badge-baru {
            background: #3b82f6;
            color: white;
        }

        .badge-proses {
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

        .badge-tinggi {
            background: #ef4444;
            color: white;
        }

        .badge-sedang {
            background: #f59e0b;
            color: white;
        }

        .badge-rendah {
            background: #10b981;
            color: white;
        }

        .badge-darurat {
            background: #dc2626;
            color: white;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        .info-item {
            padding: 1rem;
            background: #f8fafc;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .info-label {
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 0.25rem;
        }

        .info-value {
            color: #2d3748;
        }

        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0.75rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e2e8f0;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1.5rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--primary-color);
        }

        .timeline-content {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: var(--shadow-md);
        }

        .btn-status {
            margin: 0.25rem;
            border-radius: 8px;
        }

        .attachment-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            background: #f8fafc;
            border-radius: 8px;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .attachment-item:hover {
            background: #e2e8f0;
        }

        .back-btn {
            background: #6b7280;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #4b5563;
            color: white;
        }
    </style>

<!-- Notifications -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-circle me-2"></i>
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i>
        <strong>Terjadi kesalahan:</strong>
        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Main Content -->
<div class="section-padding">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="mb-0">
                    <i class="fas fa-file-alt me-3"></i>
                    Detail Pengaduan #{{ $pengaduan->id }}
                </h2>
                <p class="mb-0 mt-2 text-muted">Informasi lengkap pengaduan masyarakat</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('admin.pengaduan') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left me-2"></i>Kembali
                </a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Pengaduan Info -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Informasi Pengaduan
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">Judul Pengaduan</div>
                                    <div class="info-value">{{ $pengaduan->judul }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">Kategori</div>
                                    <div class="info-value">{{ ucfirst($pengaduan->kategori) }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">Prioritas</div>
                                    <div class="info-value">
                                        <span class="badge {{ $pengaduan->priority_badge }}">{{ ucfirst($pengaduan->prioritas) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">Status</div>
                                    <div class="info-value">
                                        <span class="badge {{ $pengaduan->status_badge }}">{{ ucfirst($pengaduan->status) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="info-item">
                                    <div class="info-label">Lokasi Kejadian</div>
                                    <div class="info-value">{{ $pengaduan->lokasi }}</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="info-item">
                                    <div class="info-label">Isi Pengaduan</div>
                                    <div class="info-value">
                                        {{ $pengaduan->isi }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pelapor Info -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-user me-2"></i>
                            Data Pelapor
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">Nama Lengkap</div>
                                    <div class="info-value">{{ $pengaduan->nama }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">NIK</div>
                                    <div class="info-value">{{ $pengaduan->nik }}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">Nomor Telepon</div>
                                    <div class="info-value">
                                        <a href="tel:{{ $pengaduan->telepon }}" class="text-decoration-none">
                                            <i class="fas fa-phone me-1"></i>{{ $pengaduan->telepon }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <div class="info-label">Email</div>
                                    <div class="info-value">
                                        <a href="mailto:{{ $pengaduan->email }}" class="text-decoration-none">
                                            <i class="fas fa-envelope me-1"></i>{{ $pengaduan->email }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="info-item">
                                    <div class="info-label">Alamat</div>
                                    <div class="info-value">{{ $pengaduan->alamat }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bukti Pendukung -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-paperclip me-2"></i>
                            Bukti Pendukung
                        </h5>
                    </div>
                    <div class="card-body">
                        @if($pengaduan->bukti)
                            <div class="attachment-item">
                                <i class="fas fa-image text-primary me-3 fa-2x"></i>
                                <div class="flex-grow-1">
                                    <div class="fw-bold">{{ basename($pengaduan->bukti) }}</div>
                                    <small class="text-muted">Bukti Pendukung • Gambar</small>
                                </div>
                                <a href="{{ asset('storage/' . $pengaduan->bukti) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-image text-muted" style="font-size: 3rem;"></i>
                                <p class="text-muted mt-2">Tidak ada bukti pendukung</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Status Update -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-edit me-2"></i>
                            Ubah Status
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pengaduan.update-status', $pengaduan->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="status" class="form-label">Status Pengaduan</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="pending" {{ $pengaduan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="diproses" {{ $pengaduan->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                    <option value="selesai" {{ $pengaduan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    <option value="ditolak" {{ $pengaduan->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="catatan" class="form-label">Catatan (Opsional)</label>
                                <textarea name="catatan" id="catatan" class="form-control" rows="3" placeholder="Tambahkan catatan untuk perubahan status..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-save me-2"></i>Update Status
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Timeline -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-history me-2"></i>
                            Riwayat Status
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-content">
                                    <div class="fw-bold">Pengaduan Diterima</div>
                                    <small class="text-muted">15 Januari 2024, 10:30</small>
                                    <p class="mb-0 mt-1">Pengaduan berhasil diterima dan akan segera ditindaklanjuti.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-content">
                                    <div class="fw-bold">Dalam Proses</div>
                                    <small class="text-muted">15 Januari 2024, 14:15</small>
                                    <p class="mb-0 mt-1">Tim teknis telah melakukan survei lokasi dan menyusun rencana perbaikan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Info -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-clock me-2"></i>
                            Informasi Cepat
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="info-item">
                            <div class="info-label">Tanggal Pengaduan</div>
                            <div class="info-value">{{ $pengaduan->created_at->format('d F Y, H:i') }} WIB</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Tanggal Update Terakhir</div>
                            <div class="info-value">{{ $pengaduan->updated_at->format('d F Y, H:i') }} WIB</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Lama Proses</div>
                            <div class="info-value">2 hari</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Petugas Penanganan</div>
                            <div class="info-value">Tim Infrastruktur Desa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection