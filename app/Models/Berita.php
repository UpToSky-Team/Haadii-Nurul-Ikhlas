<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    /** @use HasFactory<\Database\Factories\BeritaFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'id_berita',
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

    // Relationship GambarBerita
    public function gambarberitas() : HasMany 
    {
        return $this->hasMany(GambarBerita::class, 'id_berita', 'id_berita');
    }
}
