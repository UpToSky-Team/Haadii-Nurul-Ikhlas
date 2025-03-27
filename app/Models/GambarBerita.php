<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GambarBerita extends Model
{
    /** @use HasFactory<\Database\Factories\GambarBeritaFactory> */
    use HasFactory;

    // Relationship Berita
    public function beritas() : BelongsTo 
    {
        return $this->belongsTo(Berita::class);
    }
}
