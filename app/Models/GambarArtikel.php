<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GambarArtikel extends Model
{
    /** @use HasFactory<\Database\Factories\GambarArtikelFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_gambar_artikel';

    protected $fillable = [
        'id_gambar_artikel',
        'caption',
        'gambar_url',
    ];


    // Relationship Artikel
    public function artikels() : BelongsTo 
    {
        return $this->belongsTo(Artikel::class, 'id_artikel', 'id_artikel');
    }
}
