@extends('layouts.app')

@section('title', 'Pengaduan Masyarakat')

@section('content')
<!-- Page Header -->
<section class="hero-section d-flex align-items-center text-white position-relative" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.9) 0%, rgba(155, 89, 182, 0.9) 50%, rgba(52, 73, 94, 0.9) 100%), linear-gradient(45deg, #f8fafc 0%, #e2e8f0 100%); min-height: 100vh;">
    <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(2px);"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content p-5 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);">
                    <h1 class="display-4 fw-bold mb-4 hero-title fade-in-up" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.5); color: #ffffff;">Pengaduan Masyarakat</h1>
                    <p class="lead mb-4 fade-in-up" style="animation-delay: 0.2s; text-shadow: 1px 1px 4px rgba(0,0,0,0.5); color: #f8f9fa; line-height: 1.6;">Sampaikan keluhan, saran, atau laporan Anda untuk kemajuan Desa Ciakar. Suara Anda adalah kunci pembangunan yang berkelanjutan.</p>
                    <div class="d-flex gap-3 fade-in-up" style="animation-delay: 0.4s">
                        <a href="#form-pengaduan" class="btn btn-warning btn-lg px-4 py-3 rounded-pill shadow-lg" style="background: linear-gradient(45deg, #f39c12, #e67e22); border: none; font-weight: 600; transition: all 0.3s ease;">
                            <i class="fas fa-arrow-down me-2"></i>Ajukan Pengaduan
                        </a>
                        <a href="{{ route('admin.login') }}" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill" style="border: 2px solid rgba(255,255,255,0.8); backdrop-filter: blur(10px); font-weight: 600; transition: all 0.3s ease;">
                            <i class="fas fa-user-shield me-2"></i>Login Admin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Info Pengaduan Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Jenis Pengaduan</h2>
                <p class="section-subtitle">Pilih kategori pengaduan yang sesuai dengan keluhan Anda</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-road fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Infrastruktur</h5>
                        <p class="card-text">Jalan rusak, drainase, penerangan, dan fasilitas umum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-users fa-3x text-success"></i>
                        </div>
                        <h5 class="card-title">Pelayanan</h5>
                        <p class="card-text">Kualitas pelayanan administrasi dan petugas desa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-leaf fa-3x text-warning"></i>
                        </div>
                        <h5 class="card-title">Lingkungan</h5>
                        <p class="card-text">Kebersihan, sampah, pencemaran, dan kerusakan lingkungan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt fa-3x text-danger"></i>
                        </div>
                        <h5 class="card-title">Keamanan</h5>
                        <p class="card-text">Gangguan keamanan, ketertiban, dan keselamatan warga</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Pengaduan Section -->
<section id="form-pengaduan" class="section-padding bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Form Pengaduan</h2>
                <p class="section-subtitle">Isi formulir di bawah ini dengan lengkap dan jelas</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card hover-card">
                    <div class="card-body p-5">
                        <form id="pengaduanForm" action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik" class="form-label">NIK *</label>
                                    <input type="text" class="form-control" id="nik" name="nik" maxlength="16" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telepon" class="form-label">Nomor Telepon *</label>
                                    <input type="tel" class="form-control" id="telepon" name="telepon" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat Lengkap *</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2" required placeholder="RT/RW, Dusun, Desa"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="kategori" class="form-label">Kategori Pengaduan *</label>
                                    <select class="form-select" id="kategori" name="kategori" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="infrastruktur">Infrastruktur</option>
                                        <option value="pelayanan">Pelayanan</option>
                                        <option value="lingkungan">Lingkungan</option>
                                        <option value="keamanan">Keamanan</option>
                                        <option value="sosial">Sosial Kemasyarakatan</option>
                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="prioritas" class="form-label">Tingkat Prioritas *</label>
                                    <select class="form-select" id="prioritas" name="prioritas" required>
                                        <option value="">Pilih Prioritas</option>
                                        <option value="rendah">Rendah</option>
                                        <option value="sedang">Sedang</option>
                                        <option value="tinggi">Tinggi</option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="lokasi" class="form-label">Lokasi Kejadian *</label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" required placeholder="Sebutkan lokasi spesifik kejadian">
                                </div>
                                <div class="col-12">
                                    <label for="judul" class="form-label">Judul Pengaduan *</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required placeholder="Ringkasan singkat pengaduan Anda">
                                </div>
                                <div class="col-12">
                                    <label for="isi" class="form-label">Isi Pengaduan *</label>
                                    <textarea class="form-control" id="isi" name="isi" rows="6" required placeholder="Jelaskan secara detail pengaduan Anda, termasuk kronologi kejadian, dampak yang ditimbulkan, dan solusi yang diharapkan"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="bukti" class="form-label">Bukti Pendukung</label>
                                    <input type="file" class="form-control" id="bukti" name="bukti_files[]" accept="image/*,.pdf,.doc,.docx" multiple>
                                    <div class="form-text">Upload foto, dokumen, atau file pendukung lainnya (maksimal 5MB per file)</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="persetujuan" name="persetujuan" required>
                                        <label class="form-check-label" for="persetujuan">
                                            Saya menyatakan bahwa informasi yang saya berikan adalah benar dan dapat dipertanggungjawabkan. Saya memberikan izin kepada Pemerintah Desa Ciakar untuk memproses pengaduan ini sesuai dengan prosedur yang berlaku.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="anonim" name="anonim">
                                        <label class="form-check-label" for="anonim">
                                            Saya ingin pengaduan ini bersifat anonim (identitas tidak ditampilkan)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fas fa-paper-plane me-2"></i>Kirim Pengaduan
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary btn-lg px-5 ms-3">
                                        <i class="fas fa-redo me-2"></i>Reset Form
                                    </button>
                                </div>
                                <div class="col-12">
                                    <div class="text-center mt-4">
                                        <small class="text-muted">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Pengaduan akan diproses maksimal 3x24 jam kerja
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prosedur Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Prosedur Pengaduan</h2>
                <p class="section-subtitle">Tahapan penanganan pengaduan masyarakat</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fw-bold fs-4">1</span>
                            </div>
                        </div>
                        <h5 class="card-title">Pengajuan</h5>
                        <p class="card-text">Masyarakat mengajukan pengaduan melalui formulir online atau datang langsung</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fw-bold fs-4">2</span>
                            </div>
                        </div>
                        <h5 class="card-title">Verifikasi</h5>
                        <p class="card-text">Tim verifikasi memeriksa kelengkapan dan kebenaran data pengaduan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <div class="bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fw-bold fs-4">3</span>
                            </div>
                        </div>
                        <h5 class="card-title">Penanganan</h5>
                        <p class="card-text">Petugas terkait menindaklanjuti pengaduan sesuai dengan kategori dan prioritas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card hover-card text-center h-100">
                    <div class="card-body p-4">
                        <div class="feature-icon mb-3">
                            <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fw-bold fs-4">4</span>
                            </div>
                        </div>
                        <h5 class="card-title">Pelaporan</h5>
                        <p class="card-text">Pelapor mendapat notifikasi status dan hasil penanganan pengaduan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
// Form validation and submission
document.getElementById('pengaduanForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Basic validation
    const requiredFields = this.querySelectorAll('[required]');
    let isValid = true;

    requiredFields.forEach(field => {
        let fieldValid = false;
        
        if (field.type === 'checkbox') {
            fieldValid = field.checked;
        } else if (field.tagName === 'SELECT') {
            fieldValid = field.value !== '';
        } else {
            fieldValid = field.value.trim() !== '';
        }
        
        if (!fieldValid) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.remove('is-invalid');
        }
    });

    if (!isValid) {
        alert('Mohon lengkapi semua field yang wajib diisi.');
        return;
    }

    // NIK validation
    const nik = document.getElementById('nik').value;
    if (nik.length !== 16 || !/^\d+$/.test(nik)) {
        alert('NIK harus berupa 16 digit angka.');
        document.getElementById('nik').focus();
        return;
    }

    // Show loading
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
    submitBtn.disabled = true;

    // Prepare form data
    const formData = new FormData(this);

    // Send form data to server
    fetch('{{ route("pengaduan.store") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Pengaduan Anda berhasil dikirim! Kami akan menindaklanjuti dalam 1-3 hari kerja.');
            this.reset();
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat mengirim pengaduan. Silakan coba lagi.');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// File upload validation
document.getElementById('bukti').addEventListener('change', function () {
    const files = this.files;
    const maxSize = 5 * 1024 * 1024; // 5MB
    const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

    for (let file of files) {
        if (file.size > maxSize) {
            alert('Ukuran file ' + file.name + ' terlalu besar. Maksimal 5MB per file.');
            this.value = '';
            break;
        }
        if (!allowedTypes.includes(file.type)) {
            alert('Tipe file ' + file.name + ' tidak diizinkan. Hanya JPG, PNG, PDF, DOC, dan DOCX yang diperbolehkan.');
            this.value = '';
            break;
        }
    }
});
</script>
@endpush
@endsection