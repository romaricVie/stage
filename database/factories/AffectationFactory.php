<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Affectation>
 */
class AffectationFactory extends Factory
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
            'description' => fake()->text(),
            'motif_affection' => fake()->text(),
            'employe_id' => fake()->numberBetween(1, 5),
            'bien_id' =>fake()->numberBetween(1, 5),
        ];
    }
}
