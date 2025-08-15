@extends('layouts.app')

@section('title', 'Beranda - Desa Ciakar')

@section('content')
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center text-white position-relative" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.75) 0%, rgba(155, 89, 182, 0.75) 50%, rgba(52, 73, 94, 0.75) 100%), url('{{ asset('img/kantor_desa.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;">
    <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(2px);"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content p-5 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);">
                    <h1 class="display-4 fw-bold mb-4 hero-title fade-in-up" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.5); color: #ffffff;">Selamat Datang di Desa Ciakar</h1>
                    <p class="lead mb-4 fade-in-up" style="animation-delay: 0.2s; text-shadow: 1px 1px 4px rgba(0,0,0,0.5); color: #f8f9fa; line-height: 1.6;">Desa yang asri dan sejahtera di jantung Kabupaten Subang, Jawa Barat. Bergabunglah dengan kami dalam membangun masa depan yang lebih baik.</p>
                    <div class="d-flex gap-3 fade-in-up" style="animation-delay: 0.4s">
                        <a href="{{ url('/tentang') }}" class="btn btn-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">Tentang Kami</a>
                        <a href="{{ url('/kontak') }}" class="btn btn-outline-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; border-width: 2px; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1);">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galeri Desa Carousel -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="section-title">Galeri Desa Ciakar</h2>
                <p class="section-subtitle">Keindahan dan aktivitas masyarakat Desa Ciakar</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="desaCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner rounded-4 shadow-lg">
                        <div class="carousel-item active">
                            <div class="position-relative" style="height: 500px; overflow: hidden;">
                                <img src="{{ asset('img/view_desa.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover;" alt="Pemandangan Desa Ciakar">
                                <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                                    <div class="text-center text-white p-4 rounded-3" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                                        <h4 class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Pemandangan Desa Ciakar</h4>
                                        <p class="mb-0" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Keindahan alam yang mengelilingi Desa Ciakar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative" style="height: 500px; overflow: hidden;">
                                <img src="{{ asset('img/curug_ciakar1.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover;" alt="Curug Ciakar">
                                <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                                    <div class="text-center text-white p-4 rounded-3" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                                        <h4 class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Curug Ciakar</h4>
                                        <p class="mb-0" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Air terjun alami yang menjadi destinasi wisata desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative" style="height: 500px; overflow: hidden;">
                                <img src="{{ asset('img/aula_desa.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover;" alt="Aula Desa">
                                <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                                    <div class="text-center text-white p-4 rounded-3" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                                        <h4 class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Aula Desa</h4>
                                        <p class="mb-0" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Tempat berkumpul dan kegiatan masyarakat desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative" style="height: 500px; overflow: hidden;">
                                <img src="{{ asset('img/fasilitas_desa.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover;" alt="Fasilitas Desa">
                                <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                                    <div class="text-center text-white p-4 rounded-3" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                                        <h4 class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Fasilitas Desa</h4>
                                        <p class="mb-0" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Fasilitas umum yang mendukung kehidupan masyarakat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative" style="height: 500px; overflow: hidden;">
                                <img src="{{ asset('img/kantor_desa.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover;" alt="Kantor Desa">
                                <div class="carousel-caption d-flex align-items-center justify-content-center h-100">
                                    <div class="text-center text-white p-4 rounded-3" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                                        <h4 class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Kantor Desa</h4>
                                        <p class="mb-0" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">Pusat pelayanan administrasi Desa Ciakar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#desaCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#desaCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fitur Unggulan -->
<section class="section-padding bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Fitur Unggulan</h2>
                <p class="section-subtitle">Layanan dan fasilitas terbaik untuk masyarakat Desa Ciakar</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center hover-card">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h5 class="card-title fw-bold">Pelayanan Masyarakat</h5>
                        <p class="card-text text-muted">Layanan administrasi yang cepat dan mudah untuk seluruh kebutuhan masyarakat desa.</p>
                        <a href="{{ url('/kontak') }}" class="btn btn-primary btn-sm mt-3">Pelajari Lebih</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center hover-card">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-newspaper fa-2x"></i>
                        </div>
                        <h5 class="card-title fw-bold">Informasi Terkini</h5>
                        <p class="card-text text-muted">Dapatkan berita dan informasi terbaru seputar kegiatan dan perkembangan desa.</p>
                        <a href="{{ url('/berita') }}" class="btn btn-primary btn-sm mt-3">Lihat Berita</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center hover-card">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <h5 class="card-title fw-bold">Kontak Langsung</h5>
                        <p class="card-text text-muted">Hubungi kami kapan saja untuk konsultasi dan bantuan yang Anda butuhkan.</p>
                        <a href="{{ url('/kontak') }}" class="btn btn-primary btn-sm mt-3">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistik -->
<section class="section-padding">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="section-title">Statistik Desa</h2>
                <p class="section-subtitle">Data terkini tentang Desa Ciakar</p>
            </div>
        </div>
        <!-- Baris pertama: 3 card -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card hover-card text-center glass-effect">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3" style="background: var(--gradient-primary);">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-2" style="color: var(--primary-color); font-size: 2.5rem;">4,267</h3>
                        <p class="text-muted mb-0 fw-semibold">Total Penduduk</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hover-card text-center glass-effect">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3" style="background: var(--gradient-success);">
                            <i class="fas fa-home fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-2" style="color: var(--success-color); font-size: 2.5rem;">1,411</h3>
                        <p class="text-muted mb-0 fw-semibold">Kepala Keluarga</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hover-card text-center glass-effect">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3" style="background: var(--gradient-warning);">
                            <i class="fas fa-map fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-2" style="color: var(--warning-color); font-size: 2.5rem;">6</h3>
                        <p class="text-muted mb-0 fw-semibold">Dusun</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Baris kedua: 2 card di tengah -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card hover-card text-center glass-effect">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3" style="background: var(--gradient-secondary);">
                            <i class="fas fa-building fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-2" style="color: var(--info-color); font-size: 2.5rem;">12</h3>
                        <p class="text-muted mb-0 fw-semibold">RW</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hover-card text-center glass-effect">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3" style="background: var(--gradient-info);">
                            <i class="fas fa-users-cog fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-2" style="color: var(--primary-color); font-size: 2.5rem;">24</h3>
                        <p class="text-muted mb-0 fw-semibold">RT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Berita Terkini -->
<section class="section-padding bg-gradient">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="section-title">Berita Terkini</h2>
                <p class="section-subtitle">Informasi terbaru dari Desa Ciakar</p>
            </div>
        </div>
        <div class="row g-4">
            @if(isset($beritaTerbaru) && count($beritaTerbaru) > 0)
            @foreach($beritaTerbaru as $berita)
            <div class="col-md-4">
                <div class="card hover-card h-100">
                    <div class="position-relative overflow-hidden">
                        <div class="card-img-placeholder d-flex align-items-center justify-content-center" style="height: 220px; background: var(--gradient-primary);">
                            <i class="fas fa-image fa-3x text-white"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-primary">{{ $berita->kategori }}</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">{{ $berita->judul }}</h5>
                        <p class="card-text text-muted mb-4">{{ Str::limit($berita->konten, 100) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar-alt me-1"></i>{{ $berita->created_at->format('d F Y') }}</small>
                            <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-4">
                <div class="card hover-card h-100">
                    <div class="position-relative overflow-hidden">
                        <div class="card-img-placeholder d-flex align-items-center justify-content-center" style="height: 220px; background: var(--gradient-success);">
                            <i class="fas fa-seedling fa-3x text-white"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">Program</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">Panen Raya Padi Organik</h5>
                        <p class="card-text text-muted mb-4">Desa Ciakar berhasil melaksanakan panen raya padi organik dengan hasil yang memuaskan...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar-alt me-1"></i>15 Desember 2024</small>
                            <a href="{{ route('berita.index') }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hover-card h-100">
                    <div class="position-relative overflow-hidden">
                        <div class="card-img-placeholder d-flex align-items-center justify-content-center" style="height: 220px; background: var(--gradient-primary);">
                            <i class="fas fa-road fa-3x text-white"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-info">Infrastruktur</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">Pembangunan Jalan Desa</h5>
                        <p class="card-text text-muted mb-4">Proyek pembangunan jalan desa tahap II telah dimulai untuk meningkatkan akses transportasi...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar-alt me-1"></i>10 Desember 2024</small>
                            <a href="{{ route('berita.index') }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hover-card h-100">
                    <div class="position-relative overflow-hidden">
                        <div class="card-img-placeholder d-flex align-items-center justify-content-center" style="height: 220px; background: var(--gradient-warning);">
                            <i class="fas fa-heartbeat fa-3x text-white"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-warning">Kesehatan</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">Posyandu Balita</h5>
                        <p class="card-text text-muted mb-4">Kegiatan posyandu rutin bulan ini dengan fokus pada pemeriksaan kesehatan balita...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar-alt me-1"></i>5 Desember 2024</small>
                            <a href="{{ route('berita.index') }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('berita.index') }}" class="btn btn-primary btn-lg px-5">
                <i class="fas fa-newspaper me-2"></i>Lihat Semua Berita
            </a>
        </div>
    </div>
</section>
@endsection