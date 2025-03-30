<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids;

    protected $primaryKey = 'id_admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'id_admin',
        'name',
        'ussername',
        'role',
        'password',
    ];

    protected $casts = [
        'id_admin' => 'string',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Releationship

    // Relationships Berita
    public function beritas() : HasMany 
    {
        return $this->hasMany(Berita::class);
    }

    // Relationships Artikel
    public function artikels() : HasMany
    {
        return $this->hasMany(Artikel::class);
    } 

    // Relationships Galeri
    public function galeris() : HasMany 
    {
        return $this->hasMany(Galeri::class);
    }

    // Relationships Sejarah
    public function sejarahs() : BelongsTo 
    {
        return $this->belongsTo(Sejarah::class);
    }

    // Relationships VisiMisi
    public function visimisis() : BelongsTo 
    {
        return $this->belongsTo(VisiMisi::class);
    }

    // Relationships MaksudTujuan
    public function maksudtujuans() : BelongsTo 
    {
        return $this->belongsTo(MaksudTujuan::class);
    }

    // Relationships Struktur
    public function strukturs() : BelongsTo 
    {
        return $this->belongsTo(Struktur::class);
    }
}
