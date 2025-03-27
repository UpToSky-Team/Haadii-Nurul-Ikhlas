<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GambarArtikel extends Model
{
    /** @use HasFactory<\Database\Factories\GambarArtikelFactory> */
    use HasFactory;

    // Relationship Artikel
    public function artikels() : BelongsTo 
    {
        return $this->belongsTo(Artikel::class);
    }
}
