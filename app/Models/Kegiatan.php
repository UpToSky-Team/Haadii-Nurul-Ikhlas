<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    /** @use HasFactory<\Database\Factories\KegiatanFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_kegiatan';

    public $fillable = [
        'id_kegiatan',
        'judul_kegiatan',
        'deskripsi',
        'tanggal',
        'gambar',
        'status',
        'id_admin'
    ];

    //Relationship User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }
}
