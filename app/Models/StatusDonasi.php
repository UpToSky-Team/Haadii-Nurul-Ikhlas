<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StatusDonasi extends Model
{
    /** @use HasFactory<\Database\Factories\StatusDonasiFactory> */
    use HasFactory;

    // Relationship User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship UserDonatur
    public function userDonatur() : BelongsTo
    {
        return $this->belongsTo(UserDonatur::class, 'id_user_donatur', 'id_user_donatur');
    }
}
