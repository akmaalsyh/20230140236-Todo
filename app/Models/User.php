<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Atribut yang dapat diisi (Mass Assignable).
     * Sesuai ERD: name, email, password.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Atribut yang disembunyikan saat serialisasi (seperti API).
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Pengaturan casting tipe data.
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /**
     * RELASI: Satu User memiliki banyak Product.
     * Menghubungkan ke tabel 'products' lewat user_id.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}