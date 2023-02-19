<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'thumbnail' => fake()->imageUrl(),
            'category' => fake()->word(),
            'name' => fake()->sentence(),
            'rating' => fake()->numberBetween(0, 5),
            'price' => fake()->numberBetween(50, 5000),
        ];
    }
}
