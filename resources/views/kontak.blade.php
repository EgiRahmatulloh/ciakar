@extends('layouts.app')

@section('title', 'Kontak - Desa Ciakar')

@section('content')
    <!-- Page Header -->
    <section class="hero-section d-flex align-items-center text-white position-relative" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.9) 0%, rgba(155, 89, 182, 0.9) 50%, rgba(52, 73, 94, 0.9) 100%), linear-gradient(45deg, #f8fafc 0%, #e2e8f0 100%); min-height: 100vh;">
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(2px);"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content p-5 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);">
                        <h1 class="display-4 fw-bold mb-4 hero-title fade-in-up" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.5); color: #ffffff;">Kontak Desa Ciakar</h1>
                        <p class="lead mb-4 fade-in-up" style="animation-delay: 0.2s; text-shadow: 1px 1px 4px rgba(0,0,0,0.5); color: #f8f9fa; line-height: 1.6;">Hubungi Pemerintah Desa Ciakar untuk informasi, pelayanan administrasi, dan berbagai kebutuhan masyarakat.</p>
                        <div class="d-flex gap-3 fade-in-up" style="animation-delay: 0.4s">
                            <a href="#kontak-info" class="btn btn-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                <i class="fas fa-arrow-down me-2"></i>Lihat Kontak
                            </a>
                            <a href="{{ url('/pengaduan') }}" class="btn btn-outline-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; border-width: 2px; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1);">
                                <i class="fas fa-comment-alt me-2"></i>Pengaduan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Info Section -->
    <section id="kontak-info" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Informasi Kontak</h2>
                    <p class="section-subtitle">Berbagai cara untuk menghubungi kami</p>
                </div>
            </div>
            
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-map-marker-alt fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title">Alamat Kantor</h5>
                            <p class="card-text">
                                Jl. Raya Ciakar No. 123<br>
                                Desa Ciakar, Kec. Cipaku<br>
                                Kabupaten Ciamis<br>
                                Jawa Barat
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-phone fa-3x text-success"></i>
                            </div>
                            <h5 class="card-title">Telepon</h5>
                            <p class="card-text">
                                <strong>Kantor Desa:</strong><br>
                                (0253) 123-4567<br><br>
                                <strong>HP Kepala Desa:</strong><br>
                                +62 812-3456-7890
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-envelope fa-3x text-warning"></i>
                            </div>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">
                                <strong>Email Resmi:</strong><br>
                                info@desaciakar.id<br><br>
                                <strong>Email Kepala Desa:</strong><br>
                                kades@desaciakar.id
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jam Operasional -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="mb-0"><i class="fas fa-clock me-2"></i>Jam Operasional</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h6 class="text-primary">Hari Kerja</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-day text-primary me-2"></i>Senin - Jumat</li>
                                        <li><i class="fas fa-clock text-primary me-2"></i>08:00 - 16:00 WIB</li>
                                        <li><i class="fas fa-pause-circle text-primary me-2"></i>Istirahat: 12:00 - 13:00 WIB</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-success">Hari Sabtu</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-day text-success me-2"></i>Sabtu</li>
                                        <li><i class="fas fa-clock text-success me-2"></i>08:00 - 12:00 WIB</li>
                                        <li><i class="fas fa-times-circle text-danger me-2"></i>Minggu & Libur: Tutup</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Kontak Section -->
    <section class="section-padding bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Kirim Pesan</h2>
                    <p class="section-subtitle">Sampaikan pertanyaan, saran, atau pengaduan Anda</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{ url('/kontak') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nama" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telepon" class="form-label">Nomor Telepon</label>
                                        <input type="tel" class="form-control" id="telepon" name="telepon">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kategori" class="form-label">Kategori *</label>
                                        <select class="form-select" id="kategori" name="kategori" required>
                                            <option value="">Pilih Kategori</option>
                                            <option value="informasi">Informasi Umum</option>
                                            <option value="pelayanan">Pelayanan Administrasi</option>
                                            <option value="pengaduan">Pengaduan</option>
                                            <option value="saran">Saran dan Kritik</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="subjek" class="form-label">Subjek *</label>
                                        <input type="text" class="form-control" id="subjek" name="subjek" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="pesan" class="form-label">Pesan *</label>
                                        <textarea class="form-control" id="pesan" name="pesan" rows="5" required placeholder="Tuliskan pesan Anda di sini..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="setuju" name="setuju" required>
                                            <label class="form-check-label" for="setuju">
                                                Saya setuju bahwa data yang saya berikan akan digunakan untuk keperluan komunikasi dengan Pemerintah Desa Ciakar.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">
                                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Peta Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Lokasi Kantor Desa</h2>
                    <p class="section-subtitle">Temukan kami di peta</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="map-placeholder">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="text-center">
                                        <i class="fas fa-map-marked-alt fa-5x text-muted mb-3"></i>
                                        <h5 class="text-muted">Peta Lokasi</h5>
                                        <p class="text-muted">Kantor Desa Ciakar<br>Jl. Raya Ciakar No. 123</p>
                                        <a href="https://maps.app.goo.gl/YjFGHwgU6gEALLFX8" target="_blank" class="btn btn-primary">
                                            <i class="fas fa-external-link-alt me-2"></i>Buka di Google Maps
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('styles')
<style>
.map-placeholder {
    height: 400px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 0.375rem;
}

.hover-card {
    transition: all 0.3s ease;
    border: none;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.feature-icon {
    margin-bottom: 1rem;
}

.form-control:focus,
.form-select:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

.btn-lg {
    padding: 0.75rem 2rem;
    font-size: 1.1rem;
}
</style>
@endpush