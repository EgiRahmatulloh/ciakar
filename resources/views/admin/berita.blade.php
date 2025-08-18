<!DOCTYPE html>
@extends('layouts.app')

@section('title', 'Manajemen Berita - Admin Desa Ciakar')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Manajemen Berita</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<style>
    :root {
        --primary-color: #2563eb;
        --secondary-color: #1e40af;
        --success-color: #059669;
        --warning-color: #d97706;
        --danger-color: #dc2626;
    }

    body {
        background: #f8fafc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .admin-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 2rem 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .admin-nav {
        background: white;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .nav-pills .nav-link {
        color: #64748b;
        font-weight: 500;
        border-radius: 12px;
        margin: 0 0.25rem;
        transition: all 0.3s ease;
    }

    .nav-pills .nav-link:hover {
        background: #f1f5f9;
        color: var(--primary-color);
    }

    .nav-pills .nav-link.active {
        background: var(--primary-color);
        color: white;
    }

    .card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .btn {
        border-radius: 10px;
        font-weight: 500;
        padding: 0.75rem 1.5rem;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        border: none;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        transform: translateY(-1px);
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

    .badge {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 500;
    }

    .badge-published {
        background: var(--success-color);
        color: white;
    }

    .badge-draft {
        background: var(--warning-color);
        color: white;
    }

    .badge-archived {
        background: #6b7280;
        color: white;
    }

    .logout-btn {
        background: var(--danger-color);
        border: none;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .logout-btn:hover {
        background: #b91c1c;
        color: white;
    }

    .modal-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        border-radius: 16px 16px 0 0;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        border: 2px solid #e2e8f0;
        transition: all 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
    }

    .btn-action {
        padding: 0.375rem 0.75rem;
        border-radius: 8px;
        font-size: 0.875rem;
        margin: 0 0.125rem;
    }

    /* Responsive Table Styles */
    @media (max-width: 768px) {
        .table-responsive {
            border: none;
        }

        .table th,
        .table td {
            padding: 0.5rem 0.25rem;
            font-size: 0.875rem;
        }

        /* Hide less important columns on small screens */
        .table th:nth-child(3),
        .table td:nth-child(3),
        .table th:nth-child(5),
        .table td:nth-child(5) {
            display: none;
        }

        /* Make action buttons smaller */
        .btn-action {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }

        /* Adjust badge size */
        .badge {
            font-size: 0.7rem;
            padding: 0.25rem 0.5rem;
        }

        /* Make title text smaller */
        .fw-bold {
            font-size: 0.9rem;
        }

        small {
            font-size: 0.75rem;
        }
    }

    @media (max-width: 576px) {

        /* Hide even more columns on very small screens */
        .table th:nth-child(1),
        .table td:nth-child(1) {
            display: none;
        }

        /* Make table cells more compact */
        .table th,
        .table td {
            padding: 0.25rem;
            font-size: 0.8rem;
        }

        /* Adjust header section for mobile */
        .row.align-items-center.mb-4 {
            text-align: center;
        }

        .col-md-6.text-md-end {
            text-align: center;
            margin-top: 1rem;
        }

        /* Make add button full width on mobile */
        .btn-primary {
            width: 100%;
            margin-top: 1rem;
        }

        /* Adjust filter section */
        .row.mb-4 .col-md-3,
        .row.mb-4 .col-md-2 {
            margin-bottom: 0.5rem;
        }
    }
</style>

<!-- Main Content -->
<div class="section-padding">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="mb-0">
                    <i class="fas fa-newspaper me-3"></i>
                    Kelola Berita
                </h2>
                <p class="mb-0 mt-2 text-muted">Kelola berita dan informasi desa</p>
            </div>
            <div class="col-md-6 text-md-end">
                <span class="me-3">
                    <i class="fas fa-user me-2"></i>
                    Selamat datang, Admin
                </span>
                <a href="{{ route('admin.logout') }}" class="logout-btn">
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
                <a class="nav-link active" href="{{ route('admin.berita') }}">
                    <i class="fas fa-newspaper me-2"></i>Manajemen Berita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pengaduan') }}">
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
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h2 class="mb-0">
                <i class="fas fa-list me-2 text-primary"></i>
                Daftar Berita
            </h2>
            <p class="text-muted mt-2">Kelola semua berita dan informasi desa</p>
        </div>
        <div class="col-md-4 text-md-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBerita">
                <i class="fas fa-plus me-2"></i>Tambah Berita
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="text-primary mb-2">
                        <i class="fas fa-newspaper fa-2x"></i>
                    </div>
                    <h3 class="mb-0">{{ $stats['total'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Total Berita</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="text-success mb-2">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <h3 class="mb-0">{{ $stats['published'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Published</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="text-warning mb-2">
                        <i class="fas fa-edit fa-2x"></i>
                    </div>
                    <h3 class="mb-0">{{ $stats['draft'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Draft</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="text-secondary mb-2">
                        <i class="fas fa-archive fa-2x"></i>
                    </div>
                    <h3 class="mb-0">{{ $stats['archived'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Archived</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter and Search -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.berita') }}">
                <div class="row g-3">
                    <div class="col-md-3">
                        <select class="form-select" name="status">
                            <option value="">Semua Status</option>
                            <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="archived" {{ request('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="kategori">
                            <option value="">Semua Kategori</option>
                            <option value="pengumuman" {{ request('kategori') == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                            <option value="kegiatan" {{ request('kategori') == 'kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            <option value="pembangunan" {{ request('kategori') == 'pembangunan' ? 'selected' : '' }}>Pembangunan</option>
                            <option value="sosial" {{ request('kategori') == 'sosial' ? 'selected' : '' }}>Sosial</option>
                            <option value="ekonomi" {{ request('kategori') == 'ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                            <option value="lainnya" {{ request('kategori') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search"
                                placeholder="Cari berita..." value="{{ request('search') }}">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('admin.berita') }}" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-refresh me-2"></i>Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Berita Table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($berita ?? [] as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div class="fw-bold">{{ Str::limit($item->judul ?? 'Judul Berita', 40) }}</div>
                                <small class="text-muted">{{ Str::limit($item->konten ?? 'Konten berita...', 60) }}</small>
                            </td>
                            <td>
                                <span class="badge bg-info">{{ ucfirst($item->kategori ?? 'pengumuman') }}</span>
                            </td>
                            <td>
                                @php
                                $status = $item->status ?? 'draft';
                                $badgeClass = $status == 'published' ? 'badge-published' : ($status == 'draft' ? 'badge-draft' : 'badge-archived');
                                @endphp
                                <span class="badge {{ $badgeClass }}">{{ ucfirst($status) }}</span>
                            </td>
                            <td>{{ isset($item->created_at) ? $item->created_at->format('d M Y') : date('d M Y') }}</td>
                            <td>
                                <button class="btn btn-primary btn-action" onclick="editBerita({{ $item->id ?? 1 }})">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-action" onclick="deleteBerita({{ $item->id ?? 1 }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <!-- Sample Data -->
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="fw-bold">Pembangunan Jalan Desa Tahap II Dimulai</div>
                                <small class="text-muted">Pemerintah desa memulai pembangunan jalan tahap kedua...</small>
                            </td>
                            <td><span class="badge bg-info">Pembangunan</span></td>
                            <td><span class="badge badge-published">Published</span></td>
                            <td>{{ date('d M Y') }}</td>
                            <td>
                                <button class="btn btn-primary btn-action" onclick="editBerita(1)">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-action" onclick="deleteBerita(1)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="fw-bold">Program Posyandu Balita Bulan Ini</div>
                                <small class="text-muted">Kegiatan posyandu balita akan dilaksanakan setiap...</small>
                            </td>
                            <td><span class="badge bg-info">Kegiatan</span></td>
                            <td><span class="badge badge-draft">Draft</span></td>
                            <td>{{ date('d M Y', strtotime('-1 day')) }}</td>
                            <td>
                                <button class="btn btn-primary btn-action" onclick="editBerita(2)">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-action" onclick="deleteBerita(2)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="fw-bold">Pelatihan UMKM untuk Ibu-ibu PKK</div>
                                <small class="text-muted">Dinas Koperasi mengadakan pelatihan UMKM...</small>
                            </td>
                            <td><span class="badge bg-info">Ekonomi</span></td>
                            <td><span class="badge badge-published">Published</span></td>
                            <td>{{ date('d M Y', strtotime('-2 days')) }}</td>
                            <td>
                                <button class="btn btn-primary btn-action" onclick="editBerita(3)">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-action" onclick="deleteBerita(3)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah/Edit Berita -->
<div class="modal fade" id="modalBerita" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Tambah Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formBerita">
                    <input type="hidden" id="beritaId">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Berita *</label>
                        <input type="text" class="form-control" id="judul" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori *</label>
                            <select class="form-select" id="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="pengumuman">Pengumuman</option>
                                <option value="kegiatan">Kegiatan</option>
                                <option value="pembangunan">Pembangunan</option>
                                <option value="sosial">Sosial</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                                <option value="archived">Archived</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">URL Gambar</label>
                        <input type="url" class="form-control" id="gambar"
                            placeholder="https://example.com/image.jpg">
                        <div class="form-text">Masukkan URL gambar untuk berita (opsional)</div>
                    </div>
                    <div class="mb-3">
                        <label for="konten" class="form-label">Konten Berita *</label>
                        <textarea class="form-control" id="konten" rows="8" required
                            placeholder="Tulis konten berita di sini..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="saveBerita()">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('#konten').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });

    function editBerita(id) {
        // Reset form
        document.getElementById('formBerita').reset();
        $('#konten').summernote('code', '');

        // Set modal title
        document.getElementById('modalTitle').textContent = 'Edit Berita';
        document.getElementById('beritaId').value = id;

        // Sample data for demonstration
        if (id === 1) {
            document.getElementById('judul').value = 'Pembangunan Jalan Desa Tahap II Dimulai';
            document.getElementById('kategori').value = 'pembangunan';
            document.getElementById('status').value = 'published';
            $('#konten').summernote('code', 'Pemerintah desa memulai pembangunan jalan tahap kedua untuk meningkatkan akses transportasi masyarakat.');
        } else if (id === 2) {
            document.getElementById('judul').value = 'Program Posyandu Balita Bulan Ini';
            document.getElementById('kategori').value = 'kegiatan';
            document.getElementById('status').value = 'draft';
            $('#konten').summernote('code', 'Kegiatan posyandu balita akan dilaksanakan setiap minggu pertama bulan ini.');
        }

        // Show modal
        new bootstrap.Modal(document.getElementById('modalBerita')).show();
    }

    function deleteBerita(id) {
        if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
            fetch(`/admin/berita/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message || 'Berita berhasil dihapus!');
                        location.reload();
                    } else {
                        alert(data.message || 'Terjadi kesalahan saat menghapus berita');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menghapus berita');
                });
        }
    }

    function saveBerita() {
        const form = document.getElementById('formBerita');

        // Get form data
        const judul = document.getElementById('judul').value;
        const kategori = document.getElementById('kategori').value;
        const status = document.getElementById('status').value;
        const gambar = document.getElementById('gambar').value;
        const konten = $('#konten').summernote('code');
        const beritaId = document.getElementById('beritaId').value;

        // Validate required fields
        if (!judul || !kategori || !konten) {
            alert('Mohon lengkapi semua field yang wajib diisi!');
            return;
        }

        // Prepare data
        const data = {
            judul: judul,
            kategori: kategori,
            status: status,
            gambar: gambar,
            konten: konten,
            _token: '{{ csrf_token() }}'
        };

        // Determine URL and method
        let url, method;
        if (beritaId) {
            url = `/admin/berita/${beritaId}`;
            method = 'PUT';
            data._method = 'PUT';
        } else {
            url = '{{ route("admin.berita.store") }}';
            method = 'POST';
        }

        // Send AJAX request
        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message || 'Berita berhasil disimpan!');
                    bootstrap.Modal.getInstance(document.getElementById('modalBerita')).hide();
                    location.reload();
                } else {
                    alert(data.message || 'Terjadi kesalahan saat menyimpan berita');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menyimpan berita');
            });
    }

    // Reset form when modal is hidden
    document.getElementById('modalBerita').addEventListener('hidden.bs.modal', function() {
        document.getElementById('formBerita').reset();
        $('#konten').summernote('code', '');
        document.getElementById('modalTitle').textContent = 'Tambah Berita';
        document.getElementById('beritaId').value = '';
    });
</script>
@endsection