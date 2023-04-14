<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Entite::factory(5)->create(); 
        \App\Models\Employe::factory(10)->create();
        \App\Models\Categorie::factory(5)->create();
        \App\Models\Scategorie::factory(5)->create();
        \App\Models\Sscategorie::factory(5)->create();
        \App\Models\Entrepot::factory(5)->create();
        \App\Models\Emplacement::factory(5)->create();
        \App\Models\Espace::factory(5)->create();
        \App\Models\Bien::factory(5)->create(); 
        \App\Models\Reparation::factory(5)->create(); 
        \App\Models\Affectation::factory(5)->create();  

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

     /* $this->call([

         EmployeSeeder::class,

        ]);*/
    }
}
