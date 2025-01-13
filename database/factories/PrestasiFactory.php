<?php

namespace Database\Factories;

use App\Models\Prestasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestasiFactory extends Factory
{
    protected $model = Prestasi::class;

    public function definition()
    {
        return [
            'calon_mahasiswa_id' => \App\Models\CalonMahasiswa::factory(),
            'dokumen_sertifikat' => $this->faker->imageUrl,
            'deskripsi_singkat' => $this->faker->sentence,
        ];
    }
}
