<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat(8, 2, 100),
            'description' => $this->faker->paragraph,
            'image' => $this->faker->paragraph,
            'quantity' => $this->faker->randomNumber(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
