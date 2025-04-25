<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berkas extends Model
{
    /** @use HasFactory<\Database\Factories\BerkasFactory> */
    use HasFactory, HasUuids;
    protected $primaryKey = 'id_berkas';

    protected $fillable = [
        'id_berkas',
        'id_registration',
        'foto_siswa',
        'akta_lahir',
        'kartu_keluarga',
        'ijazah',
        'dokumen_tulis',
    ];

    //Relationship UserRegistration
    public function userRegistration() : BelongsTo
    {
        return $this->belongsTo(UserRegistration::class, 'id_registration', 'id_registration');
    }
}
