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
        Schema::table('pengaduan', function (Blueprint $table) {
            // Update prioritas enum to include 'darurat'
            $table->enum('prioritas', ['rendah', 'sedang', 'tinggi', 'darurat'])->change();
            
            // Update status enum to include 'baru' and match controller expectations
            $table->enum('status', ['baru', 'pending', 'diproses', 'selesai', 'ditolak'])->default('baru')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            // Revert prioritas enum
            $table->enum('prioritas', ['rendah', 'sedang', 'tinggi'])->change();
            
            // Revert status enum
            $table->enum('status', ['pending', 'diproses', 'selesai', 'ditolak'])->default('pending')->change();
        });
    }
};
