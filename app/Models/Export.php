<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Export extends Model
{
    protected $table = 'exports';
    public $fillable = [
        'completed_at',
        'file_disk',
        'file_name',
        'exporter',
        'processed_rows',
        'total_rows',
        'successful_rows',
        'id_admin'
    ];

    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id_admin', 'id_admin');
    }
}
