<?php

namespace Database\Factories;

use App\Models\OrganisasiMahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisasiMahasiswaFactory extends Factory
{
    protected $model = OrganisasiMahasiswa::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->company,
            'logo' => $this->faker->imageUrl(200, 200, 'business'),
            'deskripsi' => $this->faker->sentence,
        ];
    }
}
