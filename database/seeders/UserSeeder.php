<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat admin
        User::create([
            'name' => 'Turtle Prime',
            'email' => 'turtle@ninja.com',
            'password' => bcrypt('ninja'),
            'role' => 'admin',
        ]);

        // Buat beberapa pengguna biasa
        User::factory(10)->create();
    }
}
