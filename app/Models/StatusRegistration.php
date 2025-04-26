<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusRegistration extends Model
{
    /** @use HasFactory<\Database\Factories\StatusRegistrationFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    // Relationship User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship UserRegistration
    public function userRegistrations() : BelongsTo
    {
        return $this->belongsTo(UserRegistration::class);
    }
}
