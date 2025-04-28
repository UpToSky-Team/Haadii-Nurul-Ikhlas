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

    protected $primaryKey = 'id_status_reg';
    public $fillable = [
        'id_status_reg',
        'id_registration',
        'id_admin',
        'status',
    ];

    // Relationship User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }

    // Relationship UserRegistration
    public function userRegistrations() : BelongsTo
    {
        return $this->belongsTo(UserRegistration::class, 'id_registration', 'id_registration');
    }
}
