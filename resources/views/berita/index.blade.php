@extends('layouts.app')

@section('title', 'Berita - Desa Ciakar')

@section('content')
    <!-- Page Header -->
    <section class="hero-section d-flex align-items-center text-white position-relative" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.9) 0%, rgba(155, 89, 182, 0.9) 50%, rgba(52, 73, 94, 0.9) 100%), linear-gradient(45deg, #f8fafc 0%, #e2e8f0 100%); min-height: 100vh;">
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(2px);"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content p-5 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);">
                        <h1 class="display-4 fw-bold mb-4 hero-title fade-in-up" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.5); color: #ffffff;">Berita Desa Ciakar</h1>
                        <p class="lead mb-4 fade-in-up" style="animation-delay: 0.2s; text-shadow: 1px 1px 4px rgba(0,0,0,0.5); color: #f8f9fa; line-height: 1.6;">Informasi terkini seputar kegiatan, perkembangan, dan berita penting dari Desa Ciakar untuk masyarakat.</p>
                        <div class="d-flex gap-3 fade-in-up" style="animation-delay: 0.4s">
                            <a href="#berita-list" class="btn btn-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                <i class="fas fa-arrow-down me-2"></i>Lihat Berita
                            </a>
                            <a href="{{ url('/') }}" class="btn btn-outline-light btn-lg px-4 py-3" style="font-weight: 600; border-radius: 12px; border-width: 2px; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1);">
                                <i class="fas fa-home me-2"></i>Beranda
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita List Section -->
    <section id="berita-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Berita Terbaru</h2>
                    <p class="section-subtitle">Ikuti perkembangan terbaru dari Desa Ciakar</p>
                </div>
            </div>
            
            <!-- Search and Filter -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form method="GET" action="{{ url('/berita') }}">
                                <div class="row g-3">
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                                            <input type="text" class="form-control" name="search" 
                                                   placeholder="Cari berita..." value="{{ request('search') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary w-100">
                                            <i class="fas fa-search me-2"></i>Cari
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Berita Grid -->
            <div class="row g-4">
                @forelse($berita ?? [] as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-img-top-placeholder">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary">{{ ucfirst($item->kategori ?? 'Umum') }}</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    {{ $item->created_at ? $item->created_at->format('d M Y') : date('d M Y') }}
                                </small>
                            </div>
                            <h5 class="card-title">{{ $item->judul ?? 'Judul Berita' }}</h5>
                            <p class="card-text flex-grow-1">{{ Str::limit($item->ringkasan ?? 'Ringkasan berita akan ditampilkan di sini...', 120) }}</p>
                            <div class="mt-auto">
                                <a href="{{ url('/berita/' . ($item->id ?? 1)) }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <!-- Default berita jika tidak ada data -->
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-img-top-placeholder">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary">Pembangunan</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    15 Des 2024
                                </small>
                            </div>
                            <h5 class="card-title">Pembangunan Jalan Desa Tahap II Dimulai</h5>
                            <p class="card-text flex-grow-1">Pemerintah Desa Ciakar memulai pembangunan jalan desa tahap kedua yang akan menghubungkan wilayah utara dan selatan desa...</p>
                            <div class="mt-auto">
                                <a href="{{ url('/berita/1') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-img-top-placeholder">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-success">Kesehatan</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    12 Des 2024
                                </small>
                            </div>
                            <h5 class="card-title">Program Posyandu Balita Bulan Ini</h5>
                            <p class="card-text flex-grow-1">Kegiatan Posyandu rutin bulan Desember akan dilaksanakan di setiap dusun dengan pelayanan imunisasi dan pemeriksaan kesehatan...</p>
                            <div class="mt-auto">
                                <a href="{{ url('/berita/2') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-img-top-placeholder">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-warning">Ekonomi</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    10 Des 2024
                                </small>
                            </div>
                            <h5 class="card-title">Pelatihan UMKM untuk Ibu-ibu PKK</h5>
                            <p class="card-text flex-grow-1">Dinas Koperasi dan UMKM mengadakan pelatihan pembuatan produk olahan makanan untuk meningkatkan ekonomi keluarga...</p>
                            <div class="mt-auto">
                                <a href="{{ url('/berita/3') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-img-top-placeholder">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-info">Sosial</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    08 Des 2024
                                </small>
                            </div>
                            <h5 class="card-title">Gotong Royong Bersih Desa</h5>
                            <p class="card-text flex-grow-1">Seluruh warga Desa Ciakar berpartisipasi dalam kegiatan gotong royong membersihkan lingkungan desa dan saluran air...</p>
                            <div class="mt-auto">
                                <a href="{{ url('/berita/4') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-img-top-placeholder">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-danger">Keamanan</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    05 Des 2024
                                </small>
                            </div>
                            <h5 class="card-title">Ronda Malam Tingkatkan Keamanan</h5>
                            <p class="card-text flex-grow-1">Kegiatan ronda malam rutin dilaksanakan oleh pemuda desa untuk menjaga keamanan dan ketertiban lingkungan...</p>
                            <div class="mt-auto">
                                <a href="{{ url('/berita/5') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card hover-card h-100">
                        <div class="card-img-top-placeholder">
                            <i class="fas fa-image fa-3x text-muted"></i>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-secondary">Pendidikan</span>
                                <small class="text-muted ms-2">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    03 Des 2024
                                </small>
                            </div>
                            <h5 class="card-title">Bantuan Seragam Sekolah untuk Siswa</h5>
                            <p class="card-text flex-grow-1">Pemerintah desa memberikan bantuan seragam sekolah kepada siswa kurang mampu untuk mendukung pendidikan anak...</p>
                            <div class="mt-auto">
                                <a href="{{ url('/berita/6') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if(isset($berita) && method_exists($berita, 'links'))
            <div class="row mt-5">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $berita->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection

@push('styles')
<style>
.card-img-top-placeholder {
    height: 200px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid #dee2e6;
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

.badge {
    font-size: 0.75rem;
}
</style>
@endpush