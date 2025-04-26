<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    /** @use HasFactory<\Database\Factories\GaleriFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_galeri';

    public $fillable = [
        'id_galeri',
        'galeri_url',
        'caption',
        'jenis',
        'id_admin',
    ];

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }
}
