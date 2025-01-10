<?php

namespace Database\Factories;

use App\Models\BreakingNew;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreakingNewFactory extends Factory
{
    protected $model = BreakingNew::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph(10),
            'author' => $this->faker->name($gender = null|'male'|'female'),
            'category' => $this->faker->word,
            'published_at' => now(),
        ];
    }
}
