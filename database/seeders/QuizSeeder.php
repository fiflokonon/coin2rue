<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Formation;
use App\Models\Module;
use App\Models\Lecon;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $modules = Module::all();
        foreach ($modules as $module) {
            $quiz = new Quiz([
                'titre' => $faker->sentence(4),
                'description' => $faker->paragraph(),
                'pass_mark' => $faker->numberBetween(50, 100),
                'user_id' => User::inRandomOrder()->first()->id,
                'quizable_id' => $module->id,
                'quizable_type' => '\App\Models\Module',
                'statut' => $faker->boolean()
            ]);
            $quiz->save();
        }
    }
}
