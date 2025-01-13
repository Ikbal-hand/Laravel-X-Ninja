<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use App\Models\OrganisasiMahasiswa;
use App\Models\FasilitasKampus;
use App\Models\CalonMahasiswa;
use App\Models\Prestasi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder untuk Berita
        \App\Models\news_report::factory(10)->create();

        // Seeder untuk Organisasi Mahasiswa
        \App\Models\OrganisasiMahasiswa::factory(5)->create();

        // Seeder untuk Fasilitas Kampus
        \App\Models\FasilitasKampus::factory(5)->create();

        // Seeder untuk Calon Mahasiswa dan Prestasi
        \App\Models\CalonMahasiswa::factory(10)->create()->each(function ($calonMahasiswa) {
            \App\Models\Prestasi::factory(3)->create(['calon_mahasiswa_id' => $calonMahasiswa->id]);

       

        });
    }
}
