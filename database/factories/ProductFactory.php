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
    // database/factories/ProductFactory.php
public function definition()
{
    return [
        'name' => $this->faker->word(),
        'description' => $this->faker->paragraph(),
        'price' => $this->faker->randomFloat(2, 1, 100),
    ];
}

}
