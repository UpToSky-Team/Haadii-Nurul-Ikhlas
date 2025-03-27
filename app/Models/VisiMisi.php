<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VisiMisi extends Model
{
    /** @use HasFactory<\Database\Factories\VisiMisiFactory> */
    use HasFactory;

    // Relationship User
    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
