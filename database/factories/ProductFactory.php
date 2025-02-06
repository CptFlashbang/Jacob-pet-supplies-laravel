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
        $types = ['Toy', 'Grooming', 'Treat'];

        return [
            'name' => $this->faker->words(3, true), // Generates a random product name
            'price' => $this->faker->randomFloat(2, 0.5, 50), // Price between 0.50 and 50.00
            'available' => $this->faker->boolean(80), // 80% chance of being true (available)
            'description' => $this->faker->sentence(12), // Generates a random description
            'type' => $this->faker->randomElement($types), // Randomly selects from the predefined types
        ];
    }
}
