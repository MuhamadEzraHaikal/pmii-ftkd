<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JejakPergerakanItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'caption',
        'image',
        'sort_order',
    ];
}
