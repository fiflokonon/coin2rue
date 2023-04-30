<?php

namespace Database\Seeders;

use App\Models\Formation;
use App\Models\Lecon;
use App\Models\Module;
use App\Models\Progression;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ProgressionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $lecons = Lecon::all();
        $modules = Module::all();
        $formations = Formation::all();

        foreach ($lecons as $lecon) {
            Progression::create([
                'user_id' => $faker->numberBetween(1, 3),
                'progressionable_id' => $lecon->id,
                'progressionable_type' => 'App\Models\Lecon',
                'pourcentage' => $faker->numberBetween(0, 100),
            ]);
        }

        foreach ($modules as $module) {
            Progression::create([
                'user_id' => $faker->numberBetween(1, 3),
                'progressionable_id' => $module->id,
                'progressionable_type' => 'App\Models\Module',
                'pourcentage' => $faker->numberBetween(0, 100),
            ]);
        }

        foreach ($formations as $formation) {
            Progression::create([
                'user_id' => $faker->numberBetween(1, 3),
                'progressionable_id' => $formation->id,
                'progressionable_type' => 'App\Models\Formation',
                'pourcentage' => $faker->numberBetween(0, 100),
            ]);
        }
    }

}
