<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserRegistration extends Model
{
    /** @use HasFactory<\Database\Factories\UserRegistrationFactory> */
    use HasFactory;

    //Relationship User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Relationship Berkas
    public function berkas() : BelongsTo
    {
        return $this->belongsTo(Berkas::class);
    }

    //Relationship StatusRegistration
    public function statusRegistrations() : BelongsTo
    {
        return $this->belongsTo(StatusRegistration::class);
    }
}
