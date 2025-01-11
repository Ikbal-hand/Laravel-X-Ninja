<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNew extends Model
{
    use HasFactory;

    // Nama tabel dalam database
    protected $table = 'breaking_news';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'content',
        'author',
        'category',
        'published_at',
    ];

    // Tipe data untuk kolom yang memerlukan casting
    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Scope untuk berita yang sudah diterbitkan.
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    /**
     * Scope untuk filter berdasarkan kategori.
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Relasi dengan model User (jika user adalah penulis).
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'name');
    }
}
