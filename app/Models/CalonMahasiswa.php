<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth',
        'nama_wali',
        'telpon',
        'no_telpon_wali',
        'nisn',
        'gender',
        'asal_sekolah',
        'jurusan',
        'peminatan_program_study',
        'social_media',
        'ktp',
        'pas_foto',
        'ijazah',
        'kartu_keluarga',
        'bantuan_pendidikan',
        'penghasilan_perbulan',
        'jumlah_tanggungan_wali',
    ];

    // Relationship to Prestasi
    public function prestasis()
    {
        return $this->hasMany(Prestasi::class);
    }
}
