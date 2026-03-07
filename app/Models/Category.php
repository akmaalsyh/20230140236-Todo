<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    /**
     * Atribut yang dapat diisi.
     * Sesuai ERD: product_id, name.
     */

    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
    ];

    /**
     * RELASI: Category merujuk ke satu Product (Many to One).
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}