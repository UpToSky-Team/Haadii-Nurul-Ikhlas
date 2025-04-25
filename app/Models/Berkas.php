<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berkas extends Model
{
    /** @use HasFactory<\Database\Factories\BerkasFactory> */
    use HasFactory;

    //Relationship UserRegistration
    public function userRegistration() : BelongsTo
    {
        return $this->belongsTo(UserRegistration::class);
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
