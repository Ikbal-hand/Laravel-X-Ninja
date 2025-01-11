<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('breaking_news', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom primary key ID
            $table->string('title'); // Kolom judul berita
            $table->text('content'); // Kolom konten berita
            $table->string('author'); // Kolom penulis
            $table->string('category')->nullable(); // Kolom kategori berita (opsional)
            $table->timestamp('published_at')->nullable(); // Kolom waktu publikasi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breaking_news');
    }
};
