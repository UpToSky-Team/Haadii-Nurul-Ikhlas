<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artikel extends Model
{
    /** @use HasFactory<\Database\Factories\ArtikelFactory> */
    use HasFactory;

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    // Relationship GambarArtikel
    public function gambarartikels() : HasMany 
    {
        return $this->hasMany(GambarArtikel::class);
    }
}
