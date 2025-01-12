<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BreakingNew;

class BreakingNewsSeeder extends Seeder
{
    public function run()
    {
    BreakingNew::factory()
            ->count(100)
            ->create();
    }
}
