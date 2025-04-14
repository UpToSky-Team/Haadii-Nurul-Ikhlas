<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDonatur extends Model
{
    /** @use HasFactory<\Database\Factories\UserDonaturFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_user_donatur';
    public $fillable = [
        'id_user_donatur',
        'nama',
        'email',
        'phone',
        'id_jenis_donasi',
        'bank_name',
        'jumlah_donasi',
        'bukti_transfer',
        'status_verifikasi',
        'id_admin',
    ];

    //Relationships User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
