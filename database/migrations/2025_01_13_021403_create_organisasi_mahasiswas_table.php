<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisasiMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('organisasi_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('logo');
            $table->string('deskripsi', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('organisasi_mahasiswas');
    }
}
