<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++)
        {
            Formation::create([
                'titre' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'prix' => $faker->numberBetween(100,  1000),
                'duree' => $faker->randomDigitNotNull(),
                'image' => $faker->imageUrl(),
                'user_id' => $faker->numberBetween(1, 3),
                'statut_admin' => $faker->boolean(),
                'statut' => $faker->boolean(),
            ]);
        }
    }
}
