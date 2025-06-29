<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Qris extends Model
{
    /** @use HasFactory<\Database\Factories\QrisFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_qris';
    protected $fillable = [
        'id_qris',
        'gambar_qris',
    ];
}
