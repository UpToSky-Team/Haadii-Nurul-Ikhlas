<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artikel extends Model
{
    /** @use HasFactory<\Database\Factories\ArtikelFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'id_artikel',
        'judul',
        'slug',
        'content',
        'id_admin',
    ];


    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }

    // Relationship GambarArtikel
    public function gambarartikels() : HasMany 
    {
        return $this->hasMany(GambarArtikel::class, 'id_artikel', 'id_artikel');
    }
}
