<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use User;

class DummyUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $userData  = [
        [
         'name' => 'Prime Ninja',
         'email'=> 'ninjaprime@emaple.com',
         'role' => 'administrator',
         'password' => bcrypt('primeninja')
        ],
        [
         'name' => 'Elite Ninja',
         'email'=> 'ninjaelite@emaple.com',
         'role' => 'calon-mahasiswa',
         'password' => bcrypt('eliteninja')
        ],
        ];
         foreach ($userData as $key => $value) {
           ModelsUser::create(attributes: $value);
    };
    }
}
