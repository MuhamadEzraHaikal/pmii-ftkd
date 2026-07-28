<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaTerbaruItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'kategori',
        'status_label',
        'isi',
        'tanggal_label',
        'link_url',
        'image',
        'sort_order',
    ];
}
