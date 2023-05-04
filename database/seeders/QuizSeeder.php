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
        for ($i = 0; $i < 10; $i++) {
            $quiz = new Quiz([
                'titre' => $faker->sentence(4),
                'description' => $faker->paragraph(),
                'pass_mark' => $faker->numberBetween(50, 100),
                'user_id' => User::inRandomOrder()->first()->id,
                'statut' => $faker->boolean()
            ]);

            $quizableType = $faker->randomElement(['\App\Models\Formation', '\App\Models\Lecon', '\App\Models\Module']);
            if (!class_exists($quizableType)) {
                throw new \Exception('La classe '.$quizableType.' n\'a pas été trouvée');
            }
            $quizableId = $quizableType::inRandomOrder()->first()->id;
            $quizableModel = $quizableType;
            $quiz->quizable()->associate($quizableModel::find($quizableId));
            $quiz->save();
        }
    }
}
