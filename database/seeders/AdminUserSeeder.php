<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Turtle Prime',
            'email' => 'turtle@ninja.com',
            'password' => Hash::make('ninja'),
            'role' => 'admin', // Pastikan Anda memiliki kolom role di tabel users
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
