<?php

namespace Database\Factories;

use App\Models\CalonMahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalonMahasiswaFactory extends Factory
{
    protected $model = CalonMahasiswa::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'birth' => $this->faker->date,
            'nama_wali' => $this->faker->name,
            'telpon' => $this->faker->phoneNumber,
            'no_telpon_wali' => $this->faker->phoneNumber,
            'nisn' => $this->faker->unique()->randomNumber(8),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'asal_sekolah' => $this->faker->company,
            'jurusan' => $this->faker->word,
            'peminatan_program_study' => $this->faker->randomElement(['Informatika', 'Teknik Industri']),
            'social_media' => $this->faker->url,
            'ktp' => $this->faker->imageUrl,
            'pas_foto' => $this->faker->imageUrl,
            'ijazah' => $this->faker->imageUrl,
            'kartu_keluarga' => $this->faker->imageUrl,
            'bantuan_pendidikan' => $this->faker->imageUrl,
            'penghasilan_perbulan' => $this->faker->randomFloat(2, 2000000, 5000000),
            'jumlah_tanggungan_wali' => $this->faker->randomNumber(1),
        ];
    }
}
