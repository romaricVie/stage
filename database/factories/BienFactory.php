<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
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
            'name' => fake()->randomElement(['MacBook', ' HP ProBook', 'HP G3','Toshiba']),
            'price' => fake()->numberBetween(200000, 900000),
            'day' => fake()->dayOfMonth(),
            'month' => fake()->month(),
            'year' => fake()->year(),
            'image' => fake()->name().'.png',
            'generation' => fake()->randomElement(['10TH', '11TH', '2020', '2022']),
            'etat' => fake()->randomElement(['occupe','libre', 'hors_service']),
            'ram' => fake()->randomElement(['4GB', '8GB', '16GB', '24GB']),
            'disque_dur' =>fake()->randomElement(['126GB', '500GB', '1T', '256GB']),
            'processeur' =>fake()->randomElement(['i3', 'i5', 'i7','i9']),
            'couleur' => fake()->randomElement(['Noir', 'Gris', 'Or']),
            'marque' => fake()->randomElement(['HP', 'Lonovo', 'Toshiba','Dell']),
            'categorie_id' =>fake()->numberBetween(1, 5),
            'scategorie_id'=> fake()->numberBetween(1, 5),
            'sscategorie_id' =>fake()->numberBetween(1, 5),
            'entrepot_id' =>fake()->numberBetween(1, 5),
            'emplacement_id'=>fake()->numberBetween(1, 5),
            'espace_id'=>fake()->numberBetween(1, 5),
            'entite_id' =>fake()->numberBetween(1, 5),
        ];
    }
}
