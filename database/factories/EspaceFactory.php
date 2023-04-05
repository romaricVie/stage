<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Espace>
 */
class EspaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'name' => fake()->name(),
            'description' => fake()->text(),
            'entrepot_id' => fake()->numberBetween(1, 5),
            'emplacement_id'=>fake()->numberBetween(1, 5),
        ];
    }
}
