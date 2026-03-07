<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     * Sesuai ERD: user_id, name, qty, price.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Mengambil ID dari user yang sudah ada secara acak
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'name'    => fake()->words(3, true), // Menghasilkan nama produk (misal: "Smartphone Pro Max")
            'qty'     => fake()->numberBetween(1, 100),
            'price'   => fake()->randomFloat(2, 1000, 1000000), // Harga acak antara 1.000 - 1.000.000
        ];
    }
}