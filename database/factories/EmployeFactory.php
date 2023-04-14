<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
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
            'firstname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'fonction' => 'Informaticien',
            'contact' => '01010101',
            'flotte' => '01010101',
            'fixe' => fake()->numberBetween(1, 100),
            'statut' => fake()->randomElement(['actif','inactif']),
            'contrat' =>fake()->randomElement(['cdd','cdi']),
            'autres' =>fake()->text(),
            'entite_id' =>fake()->numberBetween(1, 5),
        ];
    }
}
