<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAdmin extends Model
{
    protected $table = 'log_admin';
    
    protected $fillable = [
        'admin_id',
        'aktivitas',
        'deskripsi',
        'ip_address',
        'user_agent'
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
