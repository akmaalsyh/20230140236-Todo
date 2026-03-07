<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     * Sesuai ERD: product_id, name.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Mengambil ID dari produk yang sudah ada secara acak
            'product_id' => Product::inRandomOrder()->first()->id ?? Product::factory(),
            'name'       => fake()->randomElement(['Elektronik', 'Fashion', 'Makanan', 'Kesehatan', 'Hobi']),
        ];
    }
}