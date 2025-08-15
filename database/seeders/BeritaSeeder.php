<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use App\Models\Admin;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan ada admin untuk dijadikan penulis
        $admin = Admin::first();
        if (!$admin) {
            // Buat admin default jika belum ada
            $admin = Admin::create([
                'username' => 'admin',
                'password' => bcrypt('password'),
                'nama_lengkap' => 'Administrator',
                'email' => 'admin@ciakar.com',
                'role' => 'admin',
                'aktif' => true
            ]);
        }

        // Data sample berita
        $beritaData = [
            [
                'judul' => 'Pembangunan Jalan Desa Ciakar Tahap 2 Dimulai',
                'konten' => '<p>Desa Ciakar kembali melanjutkan program pembangunan infrastruktur dengan memulai pembangunan jalan desa tahap 2. Proyek ini diharapkan dapat meningkatkan aksesibilitas dan mobilitas warga desa.</p><p>Kepala Desa menyampaikan bahwa pembangunan ini merupakan prioritas utama untuk meningkatkan kesejahteraan masyarakat. Dana pembangunan berasal dari APBD dan bantuan pemerintah pusat.</p><p>Pembangunan diperkirakan akan selesai dalam 6 bulan ke depan dengan melibatkan tenaga kerja lokal untuk memberdayakan ekonomi masyarakat setempat.</p>',
                'kategori' => 'pembangunan',
                'status' => 'published',
                'admin_id' => $admin->id
            ],
            [
                'judul' => 'Kegiatan Gotong Royong Membersihkan Lingkungan Desa',
                'konten' => '<p>Warga Desa Ciakar mengadakan kegiatan gotong royong membersihkan lingkungan desa yang diikuti oleh seluruh RT dan RW. Kegiatan ini dilaksanakan setiap bulan untuk menjaga kebersihan dan keindahan desa.</p><p>Kegiatan dimulai pukul 07.00 WIB dengan pembagian tugas di setiap wilayah. Warga antusias mengikuti kegiatan ini sebagai bentuk kepedulian terhadap lingkungan.</p><p>Hasil gotong royong menunjukkan peningkatan kebersihan yang signifikan di seluruh area desa, terutama di area fasilitas umum dan jalan utama.</p>',
                'kategori' => 'sosial',
                'status' => 'published',
                'admin_id' => $admin->id
            ],
            [
                'judul' => 'Program Pelatihan Keterampilan untuk Ibu-Ibu PKK',
                'konten' => '<p>Desa Ciakar mengadakan program pelatihan keterampilan untuk ibu-ibu PKK dalam rangka meningkatkan kemampuan dan kemandirian ekonomi. Pelatihan meliputi pembuatan kerajinan tangan dan pengolahan makanan.</p><p>Pelatihan ini bekerjasama dengan Dinas Pemberdayaan Masyarakat dan akan berlangsung selama 2 minggu. Peserta akan mendapatkan sertifikat dan bantuan modal usaha.</p><p>Diharapkan setelah pelatihan, ibu-ibu PKK dapat mengembangkan usaha mandiri yang dapat meningkatkan pendapatan keluarga.</p>',
                'kategori' => 'ekonomi',
                'status' => 'published',
                'admin_id' => $admin->id
            ],
            [
                'judul' => 'Pengumuman Pelaksanaan Musyawarah Desa Bulan Ini',
                'konten' => '<p>Pemerintah Desa Ciakar mengumumkan akan dilaksanakannya Musyawarah Desa (Musdes) pada tanggal 25 bulan ini di Balai Desa. Agenda utama adalah pembahasan program kerja tahun depan.</p><p>Seluruh warga diharapkan dapat hadir untuk memberikan masukan dan saran terkait pembangunan desa. Musdes akan dimulai pukul 19.00 WIB.</p><p>Agenda yang akan dibahas meliputi: rencana pembangunan infrastruktur, program pemberdayaan masyarakat, dan alokasi anggaran desa.</p>',
                'kategori' => 'pengumuman',
                'status' => 'published',
                'admin_id' => $admin->id
            ],
            [
                'judul' => 'Festival Budaya Desa Ciakar 2024',
                'konten' => '<p>Desa Ciakar akan mengadakan Festival Budaya tahunan yang menampilkan berbagai kesenian dan budaya lokal. Festival ini bertujuan untuk melestarikan budaya dan memperkenalkan potensi desa kepada masyarakat luas.</p><p>Acara akan menampilkan tarian tradisional, pameran hasil pertanian, dan bazaar produk UMKM lokal. Festival dijadwalkan berlangsung selama 3 hari.</p><p>Panitia mengundang seluruh masyarakat untuk berpartisipasi baik sebagai peserta maupun pengunjung. Diharapkan festival ini dapat meningkatkan rasa bangga terhadap budaya lokal.</p>',
                'kategori' => 'kegiatan',
                'status' => 'published',
                'admin_id' => $admin->id
            ],
            [
                'judul' => 'Draft: Rencana Pembangunan Posyandu Baru',
                'konten' => '<p>Pemerintah desa sedang merencanakan pembangunan posyandu baru untuk melayani wilayah yang belum terjangkau. Rencana ini masih dalam tahap kajian dan akan dibahas dalam musyawarah desa.</p><p>Lokasi yang dipertimbangkan adalah di wilayah RT 05 yang memiliki akses strategis. Pembangunan direncanakan akan dimulai tahun depan.</p>',
                'kategori' => 'pembangunan',
                'status' => 'draft',
                'admin_id' => $admin->id
            ]
        ];

        foreach ($beritaData as $berita) {
            Berita::create($berita);
        }

        $this->command->info('Berhasil membuat ' . count($beritaData) . ' data berita sample.');
    }
}