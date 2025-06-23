<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDonatur extends Model
{
    /** @use HasFactory<\Database\Factories\UserDonaturFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_user_donatur';
    public $fillable = [
        'id_user_donatur',
        'nama',
        'email',
        'phone',
        'id_jenis_donasi',
        'id_bank',
        'jumlah_donasi',
        'bukti_transfer',
        'id_admin',
    ];

    // Relationships User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }

    // Relationships JenisDonasi
    public function jenisDonasis() : BelongsTo
    {
        return $this->belongsTo(JenisDonasi::class, 'id_jenis_donasi', 'id_jenis_donasi');
    }

    // Relationship StatusDonasi
    public function statusDonasi()
    {
        return $this->hasOne(StatusDonasi::class, 'id_user_donatur', 'id_user_donatur');
    }

    // Relationship Bank
    public function bank() : BelongsTo
    {
        return $this->belongsTo(Bank::class, 'id_bank', 'id_bank');
    }

    // Soft delete relasi secara otomatis
    protected static function boot()
    {
        parent::boot();

        // Ketika model UserDonatur di-soft delete, semua relasi yang juga menggunakan SoftDeletes akan ikut di-soft delete
        static::deleting(function ($userDonatur) {
            if (!$userDonatur->isForceDeleting()) {
                // Soft delete relasi terkait
                $userDonatur->statusDonasi()->delete(); // Hapus relasi statusDonasi
                // Jika ada relasi lain, tambahkan dengan cara yang sama
            }
        });

        // Mengembalikan relasi terkait saat restore
        static::restored(function ($userDonatur) {
            // Cek dan restore relasi yang di-soft delete sebelumnya
            $userDonatur->statusDonasi()->restore(); // Kembalikan relasi statusDonasi
            // Tambahkan relasi lain yang perlu di-restore jika ada
        });
    }
}

