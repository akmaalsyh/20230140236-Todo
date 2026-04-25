<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * Atribut yang dapat diisi.
     */

    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * RELASI: Category memiliki banyak Product (One to Many).
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}