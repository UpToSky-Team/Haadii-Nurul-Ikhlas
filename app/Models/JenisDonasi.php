<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisDonasi extends Model
{
    /** @use HasFactory<\Database\Factories\JenisDonasiFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_jenis_donasi';
    protected $fillable = [
        'id_jenis_donasi',
        'jenis',
        'description',
        'id_admin',
    ];
    use HasFactory;

    //Relationships User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }
}
