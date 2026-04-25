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
     */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
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
     * RELASI: Product dimiliki oleh satu Category (Many to One).
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}