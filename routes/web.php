<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;

// Halaman Beranda
Route::get('/', function () {
    // Ambil 3 berita terbaru yang sudah dipublish untuk ditampilkan di beranda
    $beritaTerbaru = \App\Models\Berita::where('status', 'published')
                                        ->with('admin')
                                        ->orderBy('created_at', 'desc')
                                        ->limit(3)
                                        ->get();
    
    return view('welcome', compact('beritaTerbaru'));
})->name('welcome');

// Halaman Tentang
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Halaman Pemerintahan
Route::get('/pemerintahan', function () {
    return view('pemerintahan');
})->name('pemerintahan');

// Halaman Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// Halaman Detail Berita
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// Halaman Pengaduan
Route::get('/pengaduan', function () {
    return view('pengaduan');
})->name('pengaduan');

// Handle form pengaduan
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

// Admin Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Berita Management
Route::get('/admin/berita', [BeritaController::class, 'adminIndex'])->name('admin.berita');
Route::post('/admin/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

// Admin Pengaduan Management
Route::get('/admin/pengaduan', [AdminController::class, 'pengaduan'])->name('admin.pengaduan');
Route::patch('/admin/pengaduan/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.pengaduan.update-status');
Route::get('/admin/pengaduan/{id}', [AdminController::class, 'pengaduanDetail'])->name('admin.pengaduan.detail');

// Route untuk API atau AJAX (contoh)
Route::prefix('api')->group(function () {
    Route::get('/statistik', function () {
        return response()->json([
            'penduduk' => 2847,
            'kepala_keluarga' => 892,
            'dusun' => 4,
            'rt_rw' => '12/4'
        ]);
    });
    
    Route::get('/berita-terbaru', function () {
        return response()->json([
            [
                'id' => 1,
                'judul' => 'Pembangunan Jalan Desa Tahap 2 Dimulai',
                'ringkasan' => 'Pemerintah desa memulai pembangunan jalan tahap 2 untuk meningkatkan akses transportasi warga.',
                'gambar' => 'https://via.placeholder.com/300x200',
                'tanggal' => '2024-01-15',
                'kategori' => 'Pembangunan',
                'views' => 245
            ],
            [
                'id' => 2,
                'judul' => 'Program Bantuan Sosial untuk Lansia',
                'ringkasan' => 'Desa Ciakar meluncurkan program bantuan sosial khusus untuk warga lanjut usia.',
                'gambar' => 'https://via.placeholder.com/300x200',
                'tanggal' => '2024-01-12',
                'kategori' => 'Sosial',
                'views' => 189
            ],
            [
                'id' => 3,
                'judul' => 'Pelatihan Pertanian Organik untuk Petani',
                'ringkasan' => 'Petani desa mengikuti pelatihan pertanian organik untuk meningkatkan hasil panen.',
                'gambar' => 'https://via.placeholder.com/300x200',
                'tanggal' => '2024-01-10',
                'kategori' => 'Pertanian',
                'views' => 156
            ]
        ]);
    });
    
    Route::get('/pengaduan-terbaru', function () {
        return response()->json([
            [
                'id' => 1,
                'nama' => 'Ahmad Suryadi',
                'subjek' => 'Jalan Rusak di RT 03',
                'status' => 'Dalam Proses',
                'tanggal' => '2024-01-15'
            ],
            [
                'id' => 2,
                'nama' => 'Siti Nurhaliza',
                'subjek' => 'Lampu Jalan Mati',
                'status' => 'Selesai',
                'tanggal' => '2024-01-14'
            ]
        ]);
     });
});
