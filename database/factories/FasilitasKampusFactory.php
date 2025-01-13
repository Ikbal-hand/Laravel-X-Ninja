<?php

namespace Database\Factories;

use App\Models\FasilitasKampus;
use Illuminate\Database\Eloquent\Factories\Factory;

class FasilitasKampusFactory extends Factory
{
    protected $model = FasilitasKampus::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'foto' => $this->faker->imageUrl(640, 480, 'campus'),
            'deskripsi' => $this->faker->sentence,
            'tahun_pembaruan' => $this->faker->year,
        ];
    }
}
