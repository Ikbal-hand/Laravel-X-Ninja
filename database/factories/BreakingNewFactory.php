<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreakingNewFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6), // Judul berita
            'content' => $this->faker->paragraph(4), // Konten berita
            'author' => $this->faker->name, // Nama penulis
            'category' => $this->faker->randomElement(['Technology', 'Health', 'Politics', 'Sports', 'Entertainment']), // Kategori
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Tanggal publikasi
        ];
    }
}
