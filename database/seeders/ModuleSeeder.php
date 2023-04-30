<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Module::create([
                'titre' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'image_link' => $faker->imageUrl(),
                'statut' => $faker->boolean(),
                'formation_id' => $faker->numberBetween(1, 10),
                'created_by' => $faker->numberBetween(1, 3),
            ]);
        }
    }
}
