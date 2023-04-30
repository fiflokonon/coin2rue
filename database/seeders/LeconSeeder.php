<?php

namespace Database\Seeders;

use App\Models\Lecon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LeconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Changez "10" pour générer plus ou moins de données
            Lecon::create([
                'titre' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'image_link' => $faker->imageUrl(),
                'module_id' => $faker->numberBetween(1, 10),
                'user_id' => $faker->numberBetween(1, 3),
                'statut' => $faker->boolean(),
            ]);
        }
    }
}
