<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'logo',
        'deskripsi',
    ];
}
