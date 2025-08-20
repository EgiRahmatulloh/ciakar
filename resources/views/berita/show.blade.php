@extends('layouts.app')

@section('title', ($berita->judul ?? 'Detail Berita') . ' - Desa Ciakar')

@section('content')
<!-- Page Header -->
<section class="hero-section d-flex align-items-center text-white position-relative" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.9) 0%, rgba(155, 89, 182, 0.9) 50%, rgba(52, 73, 94, 0.9) 100%), linear-gradient(45deg, #f8fafc 0%, #e2e8f0 100%); min-height: 100vh;">
    <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(2px);"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content p-5 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb mb-0" style="background: transparent;">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/berita') }}" class="text-white-50">Berita</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">{{ $berita->judul ?? 'Detail Berita' }}</li>
                        </ol>
                    </nav>
                    <h1 class="display-4 fw-bold mb-4 hero-title fade-in-up" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.5); color: #ffffff;">{{ $berita->judul ?? 'Detail Berita' }}</h1>
                    <p class="lead mb-4 fade-in-up" style="animation-delay: 0.2s; text-shadow: 1px 1px 4px rgba(0,0,0,0.5); color: #f8f9fa; line-height: 1.6;">Baca informasi lengkap dan terkini dari Desa Ciakar. Tetap terhubung dengan perkembangan dan kegiatan desa.</p>
                    <div class="d-flex gap-3 fade-in-up" style="animation-delay: 0.4s">
                        <a href="{{ url('/berita') }}" class="btn btn-warning btn-lg px-4 py-3 rounded-pill shadow-lg" style="background: linear-gradient(45deg, #f39c12, #e67e22); border: none; font-weight: 600; transition: all 0.3s ease;">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Berita
                        </a>
                        <a href="{{ url('/') }}" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill" style="border: 2px solid rgba(255,255,255,0.8); backdrop-filter: blur(10px); font-weight: 600; transition: all 0.3s ease;">
                            <i class="fas fa-home me-2"></i>Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="card">
                    <div class="card-img-top-placeholder">
                        <i class="fas fa-image fa-5x text-muted"></i>
                    </div>
                    <div class="card-body p-4">
                        <!-- Article Meta -->
                        <div class="mb-4">
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <span class="badge bg-primary fs-6">{{ ucfirst($berita->kategori ?? 'Umum') }}</span>
                                <div class="text-muted">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    {{ $berita->created_at ? $berita->created_at->format('d M Y') : date('d M Y') }}
                                </div>
                                <div class="text-muted">
                                    <i class="fas fa-user me-2"></i>
                                    {{ $berita->author ?? 'Admin Desa' }}
                                </div>
                                <div class="text-muted">
                                    <i class="fas fa-eye me-2"></i>
                                    {{ rand(50, 300) }} views
                                </div>
                            </div>
                        </div>

                        <!-- Article Title -->
                        <h1 class="mb-4">{{ $berita->judul ?? 'Judul Berita Tidak Tersedia' }}</h1>

                        <!-- Article Content -->
                        <div class="article-content">
                            @if(isset($berita->konten))
                            {!! nl2br(e($berita->konten)) !!}
                            @else
                            @if(request()->segment(2) == '1')
                            <p>Pemerintah Desa Ciakar dengan bangga mengumumkan dimulainya pembangunan jalan desa tahap kedua yang akan menghubungkan wilayah utara dan selatan desa. Proyek ini merupakan bagian dari program pembangunan infrastruktur desa yang telah direncanakan sejak awal tahun 2024.</p>

                            <p>Pembangunan jalan sepanjang 2,5 kilometer ini akan menggunakan anggaran dari Dana Desa (DD) dan Alokasi Dana Desa (ADD) dengan total nilai Rp 850 juta. Proyek ini diharapkan dapat meningkatkan aksesibilitas warga dalam melakukan aktivitas sehari-hari dan mendukung perekonomian desa.</p>

                            <p>"Dengan adanya jalan yang baik, warga akan lebih mudah mengangkut hasil pertanian ke pasar dan anak-anak sekolah dapat lebih nyaman dalam perjalanan ke sekolah," ujar Kepala Desa Ciakar, Kamil Hasan S.Ag.</p>

                            <p>Pembangunan ini melibatkan kontraktor lokal dan diharapkan dapat memberikan lapangan kerja bagi warga sekitar. Target penyelesaian proyek adalah pada akhir Februari 2025, sebelum musim hujan tiba.</p>

                            <p>Masyarakat diharapkan dapat bersabar dengan adanya gangguan lalu lintas selama proses pembangunan berlangsung. Pemerintah desa akan terus memberikan informasi terkini mengenai progress pembangunan melalui papan pengumuman dan media sosial desa.</p>
                            @elseif(request()->segment(2) == '2')
                            <p>Kegiatan Posyandu (Pos Pelayanan Terpadu) rutin bulan Desember 2024 akan dilaksanakan di setiap dusun di Desa Ciakar. Program ini merupakan upaya pemerintah desa dalam meningkatkan kesehatan ibu dan anak serta memberikan pelayanan kesehatan dasar kepada masyarakat.</p>

                            <p>Posyandu akan dilaksanakan pada tanggal 20-25 Desember 2024 dengan jadwal sebagai berikut:</p>
                            <ul>
                                <li>Dusun Desakulon: 20 Desember 2024, pukul 08.00-12.00 WIB</li>
                                <li>Dusun Tanjungjaya: 22 Desember 2024, pukul 08.00-12.00 WIB</li>
                                <li>Dusun Sindangasih: 23 Desember 2024, pukul 08.00-12.00 WIB</li>
                                <li>Dusun Sindangjaya: 25 Desember 2024, pukul 08.00-12.00 WIB</li>
                            </ul>

                            <p>Pelayanan yang diberikan meliputi imunisasi dasar untuk balita, pemeriksaan tumbuh kembang anak, pemberian vitamin A, pemeriksaan kesehatan ibu hamil, dan konsultasi gizi.</p>

                            <p>"Kami mengajak seluruh ibu-ibu yang memiliki balita dan ibu hamil untuk aktif mengikuti kegiatan Posyandu ini. Kesehatan anak adalah investasi masa depan desa," kata Bidan Desa, Ibu Siti Nurhaliza.</p>

                            <p>Kegiatan ini didukung oleh Puskesmas Kecamatan dan kader Posyandu yang telah dilatih khusus. Masyarakat diharapkan membawa Kartu Menuju Sehat (KMS) dan buku kesehatan ibu dan anak.</p>
                            @elseif(request()->segment(2) == '3')
                            <p>Dinas Koperasi dan UMKM Kabupaten bekerja sama dengan Pemerintah Desa Ciakar mengadakan pelatihan pembuatan produk olahan makanan untuk ibu-ibu anggota PKK (Pemberdayaan Kesejahteraan Keluarga). Kegiatan ini bertujuan untuk meningkatkan keterampilan dan ekonomi keluarga melalui usaha rumahan.</p>

                            <p>Pelatihan yang berlangsung selama 3 hari (18-20 Desember 2024) ini diikuti oleh 30 peserta dari berbagai dusun. Materi pelatihan meliputi pembuatan keripik singkong, dodol nangka, dan sirup buah lokal yang memanfaatkan hasil pertanian desa.</p>

                            <p>"Desa Ciakar memiliki potensi pertanian yang melimpah. Melalui pelatihan ini, kami ingin membantu ibu-ibu mengolah hasil pertanian menjadi produk bernilai tambah," ungkap Ketua PKK Desa, Ibu Hj. Sari Dewi.</p>

                            <p>Peserta tidak hanya mendapat pelatihan praktik, tetapi juga pengetahuan tentang packaging, marketing, dan perhitungan harga jual yang tepat. Setiap peserta akan mendapat starter kit berupa peralatan dasar untuk memulai usaha.</p>

                            <p>Ke depannya, produk-produk hasil pelatihan ini akan dipasarkan melalui toko online desa dan event-event pameran UMKM tingkat kabupaten. Pemerintah desa berkomitmen mendampingi para peserta hingga usaha mereka berkembang.</p>
                            @elseif(request()->segment(2) == '4')
                            <p>Seluruh warga Desa Ciakar berpartisipasi dalam kegiatan gotong royong bersih desa yang dilaksanakan pada Minggu, 8 Desember 2024. Kegiatan yang dimulai pukul 07.00 WIB ini melibatkan semua elemen masyarakat dari berbagai kalangan usia.</p>

                            <p>Gotong royong kali ini fokus pada pembersihan lingkungan desa, saluran air, dan area publik seperti balai desa, masjid, dan lapangan olahraga. Warga juga melakukan penanaman pohon di sepanjang jalan desa sebagai upaya penghijauan.</p>

                            <p>"Kebersihan adalah tanggung jawab bersama. Melalui gotong royong ini, kita tidak hanya membersihkan lingkungan tetapi juga mempererat tali silaturahmi antar warga," kata Kepala Desa Ciakar.</p>

                            <p>Kegiatan ini berhasil mengumpulkan sekitar 15 truk sampah yang kemudian diangkut ke tempat pembuangan akhir. Saluran air yang tersumbat juga berhasil dibersihkan sehingga aliran air menjadi lancar kembali.</p>

                            <p>Sebagai apresiasi, pemerintah desa menyediakan konsumsi dan door prize untuk para peserta gotong royong. Kegiatan serupa akan rutin dilaksanakan setiap bulan untuk menjaga kebersihan dan keindahan desa.</p>
                            @elseif(request()->segment(2) == '5')
                            <p>Kegiatan ronda malam rutin yang dilaksanakan oleh pemuda Desa Ciakar terbukti efektif dalam menjaga keamanan dan ketertiban lingkungan. Program yang telah berjalan selama 6 bulan ini mendapat apresiasi dari masyarakat dan aparat keamanan setempat.</p>

                            <p>Ronda malam dilaksanakan setiap hari dengan sistem bergilir antar dusun. Setiap malam, 8-10 pemuda berpatroli keliling desa mulai pukul 22.00 hingga 04.00 WIB. Mereka dilengkapi dengan handy talky untuk koordinasi dan senter untuk penerangan.</p>

                            <p>"Sejak ada ronda malam, tingkat keamanan desa meningkat signifikan. Kasus pencurian dan gangguan keamanan lainnya menurun drastis," ungkap Ketua Karang Taruna, Arif Budiman.</p>

                            <p>Selain menjaga keamanan, tim ronda juga membantu warga yang membutuhkan bantuan darurat, seperti mengantar ke rumah sakit atau membantu saat ada kejadian yang memerlukan pertolongan segera.</p>

                            <p>Pemerintah desa memberikan dukungan berupa seragam, peralatan komunikasi, dan uang transport untuk para peserta ronda. Ke depannya, program ini akan diperluas dengan melibatkan lebih banyak pemuda dan penambahan pos ronda di titik-titik strategis.</p>
                            @elseif(request()->segment(2) == '6')
                            <p>Pemerintah Desa Ciakar memberikan bantuan seragam sekolah kepada 45 siswa dari keluarga kurang mampu untuk mendukung pendidikan anak-anak desa. Program ini merupakan bagian dari komitmen desa dalam meningkatkan kualitas pendidikan dan mengurangi angka putus sekolah.</p>

                            <p>Bantuan seragam diberikan untuk siswa SD, SMP, dan SMA yang berasal dari keluarga penerima Program Keluarga Harapan (PKH) dan keluarga dengan kondisi ekonomi terbatas. Setiap siswa mendapat 2 stel seragam lengkap dengan atribut sekolah.</p>

                            <p>"Pendidikan adalah hak setiap anak. Kami tidak ingin ada anak di desa ini yang tidak bisa sekolah karena masalah ekonomi," tegas Kepala Desa saat menyerahkan bantuan di Balai Desa.</p>

                            <p>Selain seragam, pemerintah desa juga memberikan bantuan alat tulis dan tas sekolah. Program ini didanai dari Anggaran Pendapatan dan Belanja Desa (APBDes) dengan total nilai Rp 75 juta.</p>

                            <p>Para orang tua siswa penerima bantuan mengucapkan terima kasih atas perhatian pemerintah desa. Mereka berharap anak-anak dapat lebih semangat belajar dan meraih prestasi yang membanggakan desa.</p>
                            @else
                            <p>Konten berita tidak tersedia. Silakan kembali ke halaman daftar berita untuk melihat berita lainnya.</p>
                            @endif
                            @endif
                        </div>

                        <!-- Share Buttons -->
                        <div class="mt-5 pt-4 border-top">
                            <h6 class="mb-3">Bagikan Berita:</h6>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-facebook-f me-1"></i>Facebook
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm">
                                    <i class="fab fa-twitter me-1"></i>Twitter
                                </a>
                                <a href="#" class="btn btn-outline-success btn-sm">
                                    <i class="fab fa-whatsapp me-1"></i>WhatsApp
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-link me-1"></i>Copy Link
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Berita Terkait -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-newspaper me-2"></i>Berita Terkait</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="{{ url('/berita/1') }}" class="list-group-item list-group-item-action border-0 px-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-light rounded" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 fs-6">Pembangunan Jalan Desa Tahap II</h6>
                                        <small class="text-muted">15 Des 2024</small>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/berita/2') }}" class="list-group-item list-group-item-action border-0 px-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-light rounded" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 fs-6">Program Posyandu Balita</h6>
                                        <small class="text-muted">12 Des 2024</small>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/berita/3') }}" class="list-group-item list-group-item-action border-0 px-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-light rounded" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 fs-6">Pelatihan UMKM PKK</h6>
                                        <small class="text-muted">10 Des 2024</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kategori -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-tags me-2"></i>Kategori</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ url('/berita?kategori=pembangunan') }}" class="badge bg-primary text-decoration-none">Pembangunan</a>
                            <a href="{{ url('/berita?kategori=kesehatan') }}" class="badge bg-success text-decoration-none">Kesehatan</a>
                            <a href="{{ url('/berita?kategori=ekonomi') }}" class="badge bg-warning text-decoration-none">Ekonomi</a>
                            <a href="{{ url('/berita?kategori=sosial') }}" class="badge bg-info text-decoration-none">Sosial</a>
                            <a href="{{ url('/berita?kategori=keamanan') }}" class="badge bg-danger text-decoration-none">Keamanan</a>
                            <a href="{{ url('/berita?kategori=pendidikan') }}" class="badge bg-secondary text-decoration-none">Pendidikan</a>
                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-phone me-2"></i>Kontak Desa</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <small>Jl. Raya Ciakar No. 389, Ciakar, Kec. Cipaku</small>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>
                            <small>(0251) 123-4567</small>
                        </div>
                        <div class="mb-0">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <small>desaciakar389@gmail.com</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <a href="{{ url('/berita') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Berita
                    </a>
                    <a href="{{ url('/berita') }}" class="btn btn-primary">
                        Lihat Berita Lainnya<i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .card-img-top-placeholder {
        height: 300px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid #dee2e6;
    }

    .article-content {
        line-height: 1.8;
        font-size: 1.1rem;
    }

    .article-content p {
        margin-bottom: 1.5rem;
        text-align: justify;
    }

    .article-content ul {
        margin-bottom: 1.5rem;
    }

    .article-content ul li {
        margin-bottom: 0.5rem;
    }

    .badge {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
    }
</style>
@endpush