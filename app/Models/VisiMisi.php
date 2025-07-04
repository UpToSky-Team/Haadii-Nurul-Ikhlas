<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisiMisi extends Model
{
    /** @use HasFactory<\Database\Factories\VisiMisiFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_visi_misi';

    public $fillable = [
        'id_visi_misi',
        'visi',
        'misi',
        'gambar_url',
        'id_admin',
    ];

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }
}
