<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class DokumenRegis extends Model
{
    use HasUuids;

    public $incrementing = false;
    public $keyType = 'string';

    protected $fillable = [
        'id',
        'dokumen',
    ];

}
