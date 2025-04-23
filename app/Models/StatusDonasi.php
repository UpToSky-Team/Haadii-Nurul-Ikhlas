<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StatusDonasi extends Model
{
    /** @use HasFactory<\Database\Factories\StatusDonasiFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_status_donasi';
    public $fillable = [
        'id_status_donasi',
        'id_user_donatur',
        'id_admin',
        'status',
    ];

    // Relationship User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }

    // Relationship UserDonatur
    public function userDonaturs() : BelongsTo
    {
        return $this->belongsTo(UserDonatur::class, 'id_user_donatur', 'id_user_donatur');;
    }
}
