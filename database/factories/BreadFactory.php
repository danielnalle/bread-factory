<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
            'description' => fake()->sentence(),
            'bread_type_id' => Category::all()->random()->id,
            'quantity' => fake()->numberBetween(100, 200),
            'min_order' => fake()->numberBetween(10, 30),
            'price' => fake()->numberBetween(5000, 20000),
            'image' => fake()->imageUrl(),
        ];
    }
}
