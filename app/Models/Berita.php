<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    
    protected $fillable = [
        'judul',
        'konten',
        'kategori',
        'gambar',
        'status',
        'admin_id'
    ];
    
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
