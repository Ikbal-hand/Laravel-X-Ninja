<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasisTable extends Migration
{
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calon_mahasiswa_id')->constrained('calon_mahasiswas')->onDelete('cascade');
            $table->string('dokumen_sertifikat');
            $table->text('deskripsi_singkat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasis');
    }
}
