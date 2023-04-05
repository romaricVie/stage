<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sscategorie>
 */
class SscategorieFactory extends Factory
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
            'categorie_id'=>fake()->numberBetween(1, 5),
            'scategorie_id'=>fake()->numberBetween(1, 5),
        ];
    }
}
