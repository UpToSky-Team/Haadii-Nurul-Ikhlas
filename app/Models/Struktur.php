<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Struktur extends Model
{
    /** @use HasFactory<\Database\Factories\StrukturFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_struktur';
    public $fillable = [
        'id_struktur',
        'nama',
        'level',
        'gambar_url',
        'jabatan',
        'id_admin',
    ];

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
