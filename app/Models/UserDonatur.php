<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDonatur extends Model
{
    /** @use HasFactory<\Database\Factories\UserDonaturFactory> */
    use HasFactory;

    //Relationships User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
