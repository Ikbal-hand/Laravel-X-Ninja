<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\news_report>
 */
class News_reportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penulis' => $this->faker->name,
            'thumbnail_image' => $this->faker->imageUrl(640, 480, 'news'),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'tanggal_publikasi' => $this->faker->dateTimeThisYear,
            'slug' => $this->faker->slug,
        ];
    }
}
