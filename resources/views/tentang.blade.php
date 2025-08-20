@extends('layouts.app')

@section('title', 'Tentang Desa - Desa Ciakar')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Tentang Desa Ciakar</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Sejarah Desa -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-center mb-4">Sejarah Desa Ciakar</h2>
                    <div class="row">
                        <div class="col-12">
                            <p class="text-justify">
                                Pada tahun 1950-an banyak terjadi pemberontakan-pemberontakan yang dilakukan oleh gerombolan DI/TII, pemberontakan ini dipimpin oleh Karto Suwiryo. Anggota mereka kebanyakan bersembunyi di hutan dan gunung, diantara gunung gunung yang dipakai untuk bersembunyi oleh para pemberontak selain gunung Galunggung adalah gunung Sawal, maka secara otomatis desa desa yang berdekatan dengan gunung sawal mengalami banyak gangguan dan teror-teror dari para pemberontak seperti pencurian, perampokan, bahkan rumah-rumah penduduk banyak yang dibakar dengan atau tanpa alasan yang jelas, termasuk ganguan terhadap wilayah Ciakar yang saat itu masih merupakan wilayah desa Gereba.
                            </p>
                            <p class="text-justify">
                                Pada saat itu Ciakar bukan desa seperti sekarang ini, tetapi masih merupakan bagian wilayah desa gereba yang terdiri dari 9 dusun yaitu: Dusun Nanggerang, Dusun Ciroyom, Dusun Gereba, Dusun Ciawitali, Dusun Cikawung (saat ini menjadi dusun Sindangjaya), Dusun Panyusuhan (saat ini menjadi dusun Sindangasih dan Tanjungjaya), Dusunkulon (Desakulon), Dusunwetan (Desawetan), dan Ciakarhilir.
                            </p>
                            <p class="text-justify">
                                Kepala desa Gereba pada saat itu adalah bapak Karta (Dusunwetan), karena alasan yang tidak diketahui beliau meninggal ditembak oleh para pemberontak sebelum habis masa jabatannya.
                            </p>
                            <p class="text-justify">
                                Karena kejadian-kejadian tersebut dan beberapa hal lainnya maka pada tahun 1962 pemerintah menginstruksikan kepada setiap wilayah desa di sekitar gunung Sawal untuk melakukan blokade dan pendirian pos-pos pengamanan di sekeliling wilayah gunung Sawal, pos pengamanan tersebut di jaga oleh enam tentara militer dan 10 sampai 15 orang penduduk setempat pada setiap posnya. Sedangkan jarak dari setiap titik pos satu dengan lainnya adalah sekitar 50 meter. Pengepungan para pemberontak tersebut dilakukan oleh 2 kabupaten (Ciamis dan Tasik) dengan pos yang didirikan lebih dari 800 pos penjagaan di sekeliling gunung dan melibatkan sekurang-kurangnya 16.000 orang penduduk.
                            </p>
                            <p class="text-justify">
                                Setelah pengepungan beberapa minggu akhirnya para pemberontak kehabisan perbekalan sehingga mereka terpaksa turun gunung karena kelaparan dan menyerah terhadap tentara dan penduduk sekitar. Dan tidak lama setelah kejadian tersebut pemimpin para pemberontak yaitu Karto Suwiryo pun menyerah di tempat berbeda. Kejadian tersebut oleh masyarakat sekitar disebut pagar betis.
                            </p>
                            <p class="text-justify">
                                Pada tanggal 07 Oktober 1982 Ciakar memisahkan diri dari desa Gereba dan menjadi desa Ciakar dengan 6 Dusun yang masuk dalam wilayahnya yaitu: Ciakarhilir, Desawetan, Desakulon, Tanjungjaya, Sindangasih, dan Sindangjaya.
                            </p>
                            <p class="text-justify">
                                Sedangkan nama Desa Ciakar sendiri dapat diartikan Ci - berarti air, akar berarti akar pohon, Ciakar berarti air akar. Dan nama tersebut juga menjadi nama mata air yang berada di dusun Desawetan yang menjadi sumber air yang banyak dimanfaatkan oleh masyarakat sekitar untuk berbagai keperluan sehari hari seperti mengairi ladang dan sawah, dan keperluan lainnya.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Daftar Kepala Desa -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <h4 class="mb-4">Daftar Kepala Desa</h4>
                            <p class="text-justify mb-4">
                                Adapun nama-nama kepala desa yang pernah menjabat dari sejak Ciakar masih termasuk dalam wilayah pemerintahan desa Gereba hingga sekarang Ciakar sudah memisahkan diri dan menjadi desa Ciakar diantaranya adalah sebagai berikut:
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kepala Desa</th>
                                            <th>Asal Dusun</th>
                                            <th>Periode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bapak Karta</td>
                                            <td>Dusunwetan</td>
                                            <td>1951-1956</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bapak Ahmad</td>
                                            <td>Dusunwetan</td>
                                            <td>1956-1972</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bapak Ja'I</td>
                                            <td>Dusunkulon</td>
                                            <td>1972-1980</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Bapak Juhriman</td>
                                            <td>Dusunwetan</td>
                                            <td>1981-1986</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Bapak Eyo Jakaria</td>
                                            <td>Ciakarhilir</td>
                                            <td>1986-2002</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Ibu Eem Dahlia</td>
                                            <td>Desakulon</td>
                                            <td>2002-2013</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Bapak Sulaeman Nurdjamal</td>
                                            <td>Desakulon</td>
                                            <td>2013-2018</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Bapak Kamil Hasan, S.Ag.</td>
                                            <td>Desawetan</td>
                                            <td>2018 s/d Sekarang (Masa Bakti 7 Tahun)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Visi & Misi Desa</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <i class="fas fa-eye fa-3x text-primary"></i>
                                <h4 class="mt-3">Visi</h4>
                            </div>
                            <p class="text-center">
                                "Mewujudkan masyarakat Desa Ciakar Menjadi Masyarakat Yang Cerdas, Agamis dan Sejahtera."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <i class="fas fa-bullseye fa-3x text-success"></i>
                                <h4 class="mt-3">Misi</h4>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Memoptimalisasi dan membangun profesionalitas aparat pemerintah Desa Untuk Memberikan Pelayanan yang prima kepada masyarakat Secara cepat dan tepat</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Memberdayakan SDM dan SDA demi terwujudnya masyarakat yang sejahtera</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mendorong dan meningkatkan kapasitas lembaga desa menjadi lebih produktif</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Meningkatkan sarana, prasarana keagamaan serta kesejahteraan personal pendukung keagamaan</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Melaksanakan kegiatan pembangunan yang jujur, baik, transparan dan dapat dipertanggungjawabkan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Letak Geografis -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Letak Geografis</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <p class="text-justify mb-4">
                                Desa Ciakar berada di wilayah Kecamatan Cipaku dengan jarak ± 9 Km dari Ibu Kota Kecamatan dan ± 22 Km dari Kota Kabupaten Ciamis.
                            </p>
                            
                            <p class="text-justify mb-4">
                                Desa Ciakar terdiri dari 6 Dusun 12 Rukun Warga (RW) 24 Rukun Tetangga (RT) dan memiliki luas wilayah 305.155 Ha dengan batas wilayah administratif sebagai berikut:
                            </p>
                            
                            <div class="row g-4 mt-4">
                                <div class="col-md-6">
                                    <div class="card bg-light border-0">
                                        <div class="card-body">
                                            <h5 class="card-title">Batas Wilayah</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><strong>Sebelah Utara:</strong> Desa Sindangsari</li>
                                                <li class="mb-2"><strong>Sebelah Barat:</strong> Gunung Sawal</li>
                                                <li class="mb-2"><strong>Sebelah Selatan:</strong> Desa Gereba</li>
                                                <li class="mb-2"><strong>Sebelah Timur:</strong> Kecamatan Kawali</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-light border-0">
                                        <div class="card-body">
                                            <h5 class="card-title">Informasi Wilayah</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><strong>Jumlah Dusun:</strong> 6 Dusun</li>
                                                <li class="mb-2"><strong>Jumlah RW:</strong> 12 RW</li>
                                                <li class="mb-2"><strong>Jumlah RT:</strong> 24 RT</li>
                                                <li class="mb-2"><strong>Luas Wilayah:</strong> 305.155 Ha</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="text-justify mt-4 fst-italic">
                                Untuk lebih jelasnya dapat dilihat pada peta wilayah desa Ciakar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Potensi Desa -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Potensi Desa</h2>
                    <p class="lead text-muted">Berbagai potensi yang dimiliki Desa Ciakar</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-card">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-seedling fa-3x text-success mb-3"></i>
                            <h5>Pertanian</h5>
                            <p class="text-muted">Lahan pertanian yang subur dengan hasil padi, jagung, dan sayuran organik berkualitas tinggi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-card">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-mountain fa-3x text-primary mb-3"></i>
                            <h5>Wisata Alam</h5>
                            <p class="text-muted">Pemandangan alam yang indah dengan potensi pengembangan wisata alam dan agrowisata.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-card">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-store fa-3x text-danger mb-3"></i>
                            <h5>UMKM</h5>
                            <p class="text-muted">Usaha mikro kecil menengah yang berkembang pesat di bidang kuliner dan produk olahan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection