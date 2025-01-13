<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BreakingNew;

class News_reportSeeder extends Seeder
{
    public function run()
    {
        \App\Models\news_report::factory()
            ->count(100)
            ->create();
    }
}
