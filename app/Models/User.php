<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids, Notifiable, SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $primaryKey = 'id_admin';

    protected $keyType = 'string';
    public $incrementing = false;

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

    // Relationships UserDonatur
    public function userdonaturs() : HasMany
    { 
        return $this->hasMany(UserDonatur::class);
    }

    // Relationships JenisDonasi
    public function jenisdonasis() : HasMany
    {
        return $this->hasMany(JenisDonasi::class);
    }

    // Relationships Banner
    public function banners() : HasMany
    {
        return $this->hasMany(Banner::class);
    }

    // Relationships UserRegistration
    public function userregistrations() : HasMany
    {
        return $this->hasMany(UserRegistration::class);
    }

    // Relationship Kegiatan
    public function kegiatans() : HasMany
    {
        return $this->hasMany(Kegiatan::class);
    }

    // Relationship StatusRegistration
    public function statusregistrations() : HasMany
    {
        return $this->hasMany(StatusRegistration::class);
    }

    // Relationship StatusDonasi
    public function statusdonasis() : HasMany
    {
        return $this->hasMany(StatusDonasi::class); 
    }
}
