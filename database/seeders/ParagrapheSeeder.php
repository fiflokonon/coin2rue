<?php

namespace Database\Seeders;

use App\Models\Paragraphe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ParagrapheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Paragraphe::create([
                'contenu' => $faker->paragraph(),
                'ordre' => $faker->numberBetween(1, 10),
                'media_link' => $faker->imageUrl(),
                'lecon_id' => $faker->numberBetween(1, 20),
                'user_id' => $faker->numberBetween(1, 3),
                'statut' => $faker->boolean(),
            ]);
        }
    }
}
