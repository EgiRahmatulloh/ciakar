<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik', 16);
            $table->string('telepon');
            $table->string('email')->nullable();
            $table->text('alamat');
            $table->string('kategori');
            $table->enum('prioritas', ['rendah', 'sedang', 'tinggi']);
            $table->string('lokasi');
            $table->string('judul');
            $table->text('isi');
            $table->json('bukti_files')->nullable();
            $table->boolean('anonim')->default(false);
            $table->enum('status', ['pending', 'diproses', 'selesai', 'ditolak'])->default('pending');
            $table->text('tanggapan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
