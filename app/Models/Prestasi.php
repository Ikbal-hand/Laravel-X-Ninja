<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'calon_mahasiswa_id',
        'dokumen_sertifikat',
        'deskripsi_singkat',
    ];

    // Relationship to CalonMahasiswa
    public function calonMahasiswa()
    {
        return $this->belongsTo(CalonMahasiswa::class);
    }
}
