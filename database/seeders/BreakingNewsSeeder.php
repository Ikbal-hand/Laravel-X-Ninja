<?php

namespace Database\Seeders;

use App\Models\BreakingNew;
use Illuminate\Database\Seeder;

class BreakingNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BreakingNew::create([
            'title' => 'Example News Title',
            'content' => 'This is an example content for breaking news.',
            'author' => 'John Doe',
            'category' => 'Technology',
            'published_at' => now(),
        ]);

        // Anda bisa menambahkan lebih banyak data sesuai kebutuhan
    }
}
