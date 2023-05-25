<?php

namespace Database\Seeders;

use App\Models\Lecon;
use App\Models\Module;
use Faker\Provider\Lorem;
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
        $faker->addProvider(new Lorem($faker));
        $paragraphs = $faker->paragraphs(1);
        $text = implode("\n\n", $paragraphs);
        $modules = Module::all();
        foreach ($modules as $item) {
            for ($i = 0; $i < 20; $i++) { // Changez "10" pour générer plus ou moins de données
                Lecon::create([
                    'titre' => $faker->text(50),
                    'description' => $faker->text,
                    'image_link' => $faker->imageUrl(),
                    'contenu' => $text,
                    'module_id' => $item->id,
                    'ordre' => $i,
                    'user_id' => $faker->numberBetween(1, 3),
                    'statut' => true,
                ]);
            }
        }

    }
}
