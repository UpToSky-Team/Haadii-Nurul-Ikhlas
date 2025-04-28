<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yayasan extends Model
{
    /** @use HasFactory<\Database\Factories\YayasanFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_yayasan';

    public $fillable = [
        'id_yayasan',
        'nama',
        'alamat',
        'deskripsi',
        'email',
        'logo',
        'no_telepon',
        'instagram',
        'twitter',
        'youtube',
        'facebook',
        'tiktok',
        'maps',
    ];
}
