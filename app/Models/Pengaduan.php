<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';

    protected $fillable = [
        'nama',
        'nik',
        'telepon',
        'email',
        'alamat',
        'kategori',
        'prioritas',
        'lokasi',
        'judul',
        'isi',
        'bukti_files',
        'anonim',
        'status',
        'tanggapan'
    ];

    // Status constants
    const STATUS_PENDING = 'pending';
    const STATUS_DIPROSES = 'diproses';
    const STATUS_SELESAI = 'selesai';
    const STATUS_DITOLAK = 'ditolak';

    // Priority constants
    const PRIORITAS_RENDAH = 'rendah';
    const PRIORITAS_SEDANG = 'sedang';
    const PRIORITAS_TINGGI = 'tinggi';
    const PRIORITAS_DARURAT = 'darurat';

    /**
     * Get all available statuses
     */
    public static function getStatuses()
    {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_DIPROSES => 'Diproses',
            self::STATUS_SELESAI => 'Selesai',
            self::STATUS_DITOLAK => 'Ditolak'
        ];
    }

    /**
     * Get all available priorities
     */
    public static function getPriorities()
    {
        return [
            self::PRIORITAS_RENDAH => 'Rendah',
            self::PRIORITAS_SEDANG => 'Sedang',
            self::PRIORITAS_TINGGI => 'Tinggi',
            self::PRIORITAS_DARURAT => 'Darurat'
        ];
    }

    /**
     * Get display name (considering anonymous)
     */
    public function getDisplayNameAttribute()
    {
        return $this->anonim ? 'Anonim' : $this->nama;
    }

    /**
     * Get formatted date
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('d M Y H:i');
    }

    /**
     * Get status badge class
     */
    public function getStatusBadgeAttribute()
    {
        $badges = [
            self::STATUS_PENDING => 'badge-pending',
            self::STATUS_DIPROSES => 'badge-diproses',
            self::STATUS_SELESAI => 'badge-selesai',
            self::STATUS_DITOLAK => 'badge-ditolak'
        ];

        return $badges[$this->status] ?? 'badge-secondary';
    }

    /**
     * Get priority badge class
     */
    public function getPriorityBadgeAttribute()
    {
        $badges = [
            self::PRIORITAS_RENDAH => 'badge-rendah',
            self::PRIORITAS_SEDANG => 'badge-sedang',
            self::PRIORITAS_TINGGI => 'badge-tinggi',
            self::PRIORITAS_DARURAT => 'badge-darurat'
        ];

        return $badges[$this->prioritas] ?? 'badge-secondary';
    }

    protected $casts = [
        'bukti_files' => 'array',
        'anonim' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
