<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name'=> fake()->sentence(3),
            'quantity' => fake()->randomNumber(1, 100),
            'price' => fake()->randomFloat(2, 10, 1000),
            'description' =>fake()->paragraph(),
            'image' =>fake()->imageUrl()
        ];
    }
}