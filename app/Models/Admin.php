<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    
    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'email',
        'role',
        'aktif',
        'last_login'
    ];
    
    protected $hidden = [
        'password'
    ];
    
    protected $casts = [
        'aktif' => 'boolean',
        'last_login' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    
    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
    
    public function logAdmin()
    {
        return $this->hasMany(LogAdmin::class);
    }
}
