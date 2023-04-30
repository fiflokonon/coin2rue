<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Reponse;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $questions = Question::all();
        $users = User::all();

        foreach ($questions as $question) {
            $numReponses = $faker->numberBetween($min = 2, $max = 4);
            for ($i = 0; $i < $numReponses; $i++) {
                Reponse::create([
                    'reponse' => $faker->sentence,
                    'juste' => $faker->boolean,
                    'question_id' => $question->id,
                    'user_id' => $users->random()->id,
                    'statut' => $faker->boolean()
                ]);
            }
        }
    }
}
