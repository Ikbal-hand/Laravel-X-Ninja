<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasKampusesTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_kampuses', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto');
            $table->string('deskripsi', 255);
            $table->year('tahun_pembaruan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_kampuses');
    }
}
