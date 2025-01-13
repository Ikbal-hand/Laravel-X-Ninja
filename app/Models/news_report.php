<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_report extends Model
{
    use HasFactory;

    protected $fillable = [
        'penulis',
        'thumbnail_image',
        'title',
        'content',
        'tanggal_publikasi',
        'slug',
    ];
}
