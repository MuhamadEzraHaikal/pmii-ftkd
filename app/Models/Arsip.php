<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'kategori', 'deskripsi', 'file_path', 'file_type', 'ukuran', 'versi',
    ];

    public function getFileUrlAttribute(): string
    {
        return asset('storage/'.$this->file_path);
    }
}
