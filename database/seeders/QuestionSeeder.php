<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $quizzes = Quiz::all();
        $users = User::all();

        foreach ($quizzes as $quiz) {
            $numQuestions = $faker->numberBetween($min = 3, $max = 10);
            for ($i = 0; $i < $numQuestions; $i++) {
                Question::create([
                    'question' => $faker->sentence,
                    'true_or_false' => $faker->boolean,
                    'multiple_answer' => $faker->boolean,
                    'one_answer' => $faker->boolean,
                    'quiz_id' => $quiz->id,
                    'user_id' => $users->random()->id,
                    'statut' => $faker->boolean
                ]);
            }
        }
    }
}
