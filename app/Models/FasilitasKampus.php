<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKampus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'tahun_pembaruan',
    ];
}
