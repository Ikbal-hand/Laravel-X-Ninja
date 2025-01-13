<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('calon_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth');
            $table->string('nama_wali');
            $table->string('telpon');
            $table->string('no_telpon_wali');
            $table->integer('nisn');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('asal_sekolah');
            $table->string('jurusan');
            $table->enum('peminatan_program_study', ['Informatika', 'Teknik Industri']);
            $table->string('social_media')->nullable();
            $table->string('ktp');
            $table->string('pas_foto');
            $table->string('ijazah');
            $table->string('kartu_keluarga');
            $table->string('bantuan_pendidikan');
            $table->decimal('penghasilan_perbulan', 10, 2);
            $table->integer('jumlah_tanggungan_wali');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calon_mahasiswas');
    }
}
