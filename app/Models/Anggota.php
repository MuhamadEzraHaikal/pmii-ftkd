<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nim', 'jurusan', 'angkatan', 'status', 'jabatan', 'jenis_kelamin', 'kontak', 'foto',
    ];

    public function getFotoUrlAttribute(): string
    {
        return $this->foto
            ? asset('storage/'.$this->foto)
            : 'https://i.pravatar.cc/80?u='.$this->nim;
    }
}
