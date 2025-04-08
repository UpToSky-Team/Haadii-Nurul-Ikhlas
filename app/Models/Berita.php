<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Berita extends Model
{
    /** @use HasFactory<\Database\Factories\BeritaFactory> */
    use HasFactory;

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    // Relationship GambarBerita
    public function gambarberitas() : HasMany 
    {
        return $this->hasMany(GambarBerita::class);
    }
}
