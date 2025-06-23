<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRegistration extends Model
{
    /** @use HasFactory<\Database\Factories\UserRegistrationFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_registration';

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'id_registration',
        'nama_anak',
        'no_hp',
        'nama_wali',
        'no_hp_wali',
        'email_anak',
        'tempat_lahir',
        'tanggal_lahir',
        'NIK',
        'nama_sekolah_asal',
        'NPSN_sekolah_asal',
        'id_admin',
    ];

    // Relationship User
    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_admin', 'id_admin');
    }

    // Relationship Berkas
    public function berkas() : BelongsTo
    {
        return $this->belongsTo(Berkas::class, 'id_registration', 'id_registration');
    }

    // Relationship StatusRegistration
    public function statusRegistrations() : BelongsTo
    {
        return $this->belongsTo(StatusRegistration::class, 'id_registration', 'id_registration');
    }

    // Soft delete relasi secara otomatis
    protected static function boot()
    {
        parent::boot();

        // Ketika model UserRegistration di-soft delete, semua relasi yang juga menggunakan SoftDeletes akan ikut di-soft delete
        static::deleting(function ($userRegistration) {
            if (!$userRegistration->isForceDeleting()) {
                // Soft delete relasi terkait
                $userRegistration->berkas()->delete(); // Hapus relasi berkas
                $userRegistration->statusRegistrations()->delete(); // Hapus relasi statusRegistrations
            }
        });

        // Mengembalikan relasi terkait saat restore
        static::restored(function ($userRegistration) {
            // Cek dan restore relasi yang di-soft delete sebelumnya
            $userRegistration->berkas()->restore(); // Kembalikan relasi berkas
            $userRegistration->statusRegistrations()->restore(); // Kembalikan relasi statusRegistrations
        });
    }
}


