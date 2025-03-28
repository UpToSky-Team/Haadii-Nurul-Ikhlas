<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sejarah extends Model
{
    /** @use HasFactory<\Database\Factories\SejarahFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_sejarah';

    protected $fillable = [
        'id_sejarah',
        'konten',
        'gambar_url',
        'id_admin',
    ];

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }
}
