<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaksudTujuan extends Model
{
    /** @use HasFactory<\Database\Factories\MaksudTujuanFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_maksud_tujuan';
    protected $fillable = [
        'id_maksud_tujuan',
        'maksud',
        'tujuan',
        'gambar_url',
        'id_admin',
    ];

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }
}
