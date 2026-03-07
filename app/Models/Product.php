<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /**
     * Atribut yang dapat diisi.
     * Sesuai ERD: user_id, name, qty, price.
     */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'qty',
        'price',
    ];

    /**
     * RELASI: Product dimiliki oleh satu User (Many to One).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * RELASI: Product memiliki banyak Kategori (One to Many).
     * Sesuai ERD, tabel Category menyimpan product_id.
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}