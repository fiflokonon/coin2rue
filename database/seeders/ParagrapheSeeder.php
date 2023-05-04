<?php

namespace Database\Seeders;

use App\Models\Lecon;
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
        $lecons = Lecon::all()->pluck('id');
        foreach ($lecons as $lecon)
        {
            for ($i = 0; $i < 10; $i++) {
                Paragraphe::create([
                    'contenu' => $faker->paragraph(),
                    'ordre' => $i,
                    'media_link' => $faker->imageUrl(),
                    'lecon_id' => $lecon,
                    'user_id' => $faker->numberBetween(1, 3),
                    'statut' => $faker->boolean(),
                ]);
            }
        }

    }
}
