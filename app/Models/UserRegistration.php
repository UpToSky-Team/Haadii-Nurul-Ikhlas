<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserRegistration extends Model
{
    /** @use HasFactory<\Database\Factories\UserRegistrationFactory> */
    use HasFactory;

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

    public function isComplete() {
        $fillable = $this->getFillable();
        foreach($fillable as $key) {
            if(empty($this->$key)) {
                return false;
            }
        }
        return true;
    }
}
