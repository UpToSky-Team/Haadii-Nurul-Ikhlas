<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berkas extends Model
{
    /** @use HasFactory<\Database\Factories\BerkasFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_berkas';

    protected $fillable = [
        'id_berkas',
        'id_registration',
        'foto_siswa',
        'akta_lahir',
        'kartu_keluarga',
        'ijazah',
        'dokumen_tulis'
    ];

    //Relationship UserRegistration
    public function userRegistration(): BelongsTo
    {
        return $this->belongsTo(UserRegistration::class, 'id_registration', 'id_registration');
    }

    public function isComplete()
    {
        $fillable = $this->getFillable();
        foreach ($fillable as $key) {
            if (empty($this->$key)) {
                return false;
            }
        }
        return true;
    }

    public function getIsCompleteAttribute()
    {
        $fillable = $this->getFillable();

        foreach ($fillable as $key) {
            // Kecualikan ID dan foreign key (jika tidak wajib)
            if (in_array($key, ['id_berkas', 'id_registration'])) continue;

            if (empty($this->$key)) {
                return false;
            }
        }

        return true;
    }
}
