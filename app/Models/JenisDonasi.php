<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JenisDonasi extends Model
{
    /** @use HasFactory<\Database\Factories\JenisDonasiFactory> */
    use HasFactory;

    //Relationships User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
