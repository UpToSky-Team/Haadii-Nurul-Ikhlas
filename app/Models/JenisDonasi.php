<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisDonasi extends Model
{
    /** @use HasFactory<\Database\Factories\JenisDonasiFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_jenis_donasi';
    protected $fillable = [
        'id_jenis_donasi',
        'jenis',
        'description',
        'id_admin',
    ];
}
