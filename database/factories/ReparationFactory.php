<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reparation>
 */
class ReparationFactory extends Factory
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
            'etat' =>fake()->randomElement(['bon', 'hors_service']),
            'maintenancier' => fake()->name(),
            'price' =>fake()->numberBetween(50000, 100000),
            'contact_maintenancier' => '07074902578',
            'description_panne' => fake()->text(),
            'bien_id' => fake()->numberBetween(1, 5),
            'day' => fake()->dayOfMonth(),
            'month' => fake()->month(),
            'year' => fake()->year(),
        ];
    }
}
