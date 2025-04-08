<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GambarBerita extends Model
{
    /** @use HasFactory<\Database\Factories\GambarBeritaFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_gambar_berita';

    protected $fillable = [
        'id_gambar_berita',
        'caption',
        'gambar_url',
    ];

    // Relationship Berita
    public function beritas() : BelongsTo 
    {
        return $this->belongsTo(Berita::class, 'id_berita', 'id_berita');
    }
}
