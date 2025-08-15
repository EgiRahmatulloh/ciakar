@extends('layouts.app')

@section('title', 'Pemerintahan Desa - Desa Ciakar')

@section('content')
    <!-- Page Header -->
    <section class="hero-section d-flex align-items-center text-white position-relative" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.9) 0%, rgba(155, 89, 182, 0.9) 50%, rgba(52, 73, 94, 0.9) 100%), linear-gradient(45deg, #f8fafc 0%, #e2e8f0 100%); min-height: 100vh;">
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(2px);"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content p-5 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);">
                        <h1 class="display-4 fw-bold mb-4 hero-title fade-in-up" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.5); color: #ffffff;">Pemerintahan Desa Ciakar</h1>
                        <p class="lead mb-4 fade-in-up" style="animation-delay: 0.2s; text-shadow: 1px 1px 4px rgba(0,0,0,0.5); color: #f8f9fa; line-height: 1.6;">Struktur organisasi dan perangkat pemerintahan yang melayani masyarakat Desa Ciakar dengan dedikasi dan profesionalisme.</p>
                        <div class="d-flex gap-3 fade-in-up" style="animation-delay: 0.4s">
                            <a href="#kepala-desa" class="btn btn-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                <i class="fas fa-arrow-down me-2"></i>Lihat Struktur
                            </a>
                            <a href="{{ url('/kontak') }}" class="btn btn-outline-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; border-width: 2px; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1);">
                                <i class="fas fa-phone me-2"></i>Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kepala Desa Section -->
    <section id="kepala-desa" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Kepala Desa</h2>
                    <p class="section-subtitle">Pemimpin Desa Ciakar periode 2018-Sekarang</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card hover-card">
                        <div class="card-body p-5">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center mb-4 mb-md-0">
                                    <div class="profile-image-placeholder mx-auto">
                                        <i class="fas fa-user-tie fa-5x text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="mb-3">Kamil Hasan S.Ag</h3>
                                    <p class="text-muted mb-3">Kepala Desa Ciakar</p>
                                    <p class="mb-4">
                                        Memimpin Desa Ciakar dengan visi membangun desa yang mandiri dan sejahtera.
                                        Berpengalaman dalam bidang pemerintahan dan pembangunan masyarakat selama lebih
                                        dari 15 tahun.
                                    </p>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-calendar-alt text-primary me-2"></i>
                                                <small>Periode: 2018-Sekarang</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Perangkat Desa Section -->
    <section class="section-padding bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Perangkat Desa</h2>
                    <p class="section-subtitle">Tim kerja pemerintahan Desa Ciakar</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title">Solihin</h5>
                            <p class="text-muted mb-3">Sekretaris Desa</p>
                            <p class="card-text small">
                                Mengelola administrasi dan tata kelola pemerintahan desa
                                serta koordinasi dengan berbagai pihak.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-primary">Administrasi</span>
                                <span class="badge bg-secondary">Koordinasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-success"></i>
                            </div>
                            <h5 class="card-title">Majrur Rohimat</h5>
                            <p class="text-muted mb-3">Kaur Keuangan</p>
                            <p class="card-text small">
                                Bertanggung jawab atas pengelolaan keuangan desa
                                dan pelaporan anggaran pembangunan.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-success">Keuangan</span>
                                <span class="badge bg-info">Anggaran</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-warning"></i>
                            </div>
                            <h5 class="card-title">Zaenudin Abdullah</h5>
                            <p class="text-muted mb-3">Kaur Perencanaan</p>
                            <p class="card-text small">
                                Menyusun rencana pembangunan desa dan
                                mengkoordinasikan program-program pembangunan.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-warning">Perencanaan</span>
                                <span class="badge bg-danger">Pembangunan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-info"></i>
                            </div>
                            <h5 class="card-title">Aris Hadiana</h5>
                            <p class="text-muted mb-3">Kaur Umum</p>
                            <p class="card-text small">
                                Menangani urusan umum, surat menyurat,
                                dan pelayanan masyarakat sehari-hari.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-info">Pelayanan</span>
                                <span class="badge bg-secondary">Administrasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-danger"></i>
                            </div>
                            <h5 class="card-title">H.Emed Abdul Rosid</h5>
                            <p class="text-muted mb-3">Kepala Dusun Desakulon</p>
                            <p class="card-text small">
                                Memimpin dan mengkoordinasikan kegiatan
                                masyarakat di wilayah Dusun Desakulon.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-danger">Dusun Desakulon</span>
                                <span class="badge bg-primary">Koordinasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-purple"></i>
                            </div>
                            <h5 class="card-title">Rukoyah</h5>
                            <p class="text-muted mb-3">Kepala Dusun Tanjungjaya</p>
                            <p class="card-text small">
                                Memimpin dan mengkoordinasikan kegiatan
                                masyarakat di wilayah Dusun Tanjungjaya.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-purple">Dusun Tanjungjaya</span>
                                <span class="badge bg-primary">Koordinasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-purple"></i>
                            </div>
                            <h5 class="card-title">Alu Nuralim</h5>
                            <p class="text-muted mb-3">Kepala Dusun Sindangasih</p>
                            <p class="card-text small">
                                Memimpin dan mengkoordinasikan kegiatan
                                masyarakat di wilayah Dusun Sindangasih.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-purple">Dusun Sindangasih</span>
                                <span class="badge bg-primary">Koordinasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-purple"></i>
                            </div>
                            <h5 class="card-title">Arif Hidayat</h5>
                            <p class="text-muted mb-3">Kepala Dusun Sindangjaya</p>
                            <p class="card-text small">
                                Memimpin dan mengkoordinasikan kegiatan
                                masyarakat di wilayah Dusun Sindangjaya.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-purple">Dusun Sindangjaya</span>
                                <span class="badge bg-primary">Koordinasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KASI Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Kepala Seksi (KASI)</h2>
                    <p class="section-subtitle">Kepala seksi yang menangani bidang-bidang khusus</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-success"></i>
                            </div>
                            <h5 class="card-title">Yusuf Zamaludin</h5>
                            <p class="text-muted mb-3">KASI Kesejahteraan & Pemb. Masyarakat</p>
                            <p class="card-text small">
                                Menangani program kesejahteraan sosial, pemberdayaan masyarakat,
                                dan pengembangan kapasitas warga desa.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-success">Kesejahteraan</span>
                                <span class="badge bg-info">Pemberdayaan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title">lili</h5>
                            <p class="text-muted mb-3">KASI Pemerintahan</p>
                            <p class="card-text small">
                                Mengelola administrasi pemerintahan, tata kelola desa,
                                dan koordinasi dengan instansi terkait.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-primary">Pemerintahan</span>
                                <span class="badge bg-secondary">Administrasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="profile-image-placeholder mx-auto mb-3">
                                <i class="fas fa-user fa-3x text-warning"></i>
                            </div>
                            <h5 class="card-title">Nono Karno</h5>
                            <p class="text-muted mb-3">KASI Perekonomian & Pembangunan</p>
                            <p class="card-text small">
                                Mengembangkan ekonomi desa, mengelola program pembangunan,
                                dan meningkatkan kesejahteraan ekonomi masyarakat.
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-warning">Ekonomi</span>
                                <span class="badge bg-danger">Pembangunan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tugas dan Fungsi Section -->
    <section class="section-padding bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Tugas dan Fungsi</h2>
                    <p class="section-subtitle">Peran dan tanggung jawab pemerintahan desa</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card hover-card h-100">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <div class="feature-icon">
                                    <i class="fas fa-tasks fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="text-center mb-4">Pemerintah Desa</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    Menyelenggarakan pemerintahan desa
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    Melaksanakan pembangunan desa
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    Pembinaan kemasyarakatan
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    Pemberdayaan masyarakat
                                </li>
                                <li>
                                    <i class="fas fa-check-circle text-primary me-2"></i>
                                    Pelayanan kepada masyarakat
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card hover-card h-100">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <div class="feature-icon">
                                    <i class="fas fa-balance-scale fa-3x text-success"></i>
                                </div>
                            </div>
                            <h5 class="text-center mb-4">Badan Permusyawaratan Desa</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Membahas dan menyepakati Rancangan Peraturan Desa
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Menampung dan menyalurkan aspirasi masyarakat
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Melakukan pengawasan kinerja Kepala Desa
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Mengusulkan pengangkatan dan pemberhentian Kepala Desa
                                </li>
                                <li>
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Menggali, menampung, menghimpun, merumuskan dan menyalurkan aspirasi masyarakat
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection