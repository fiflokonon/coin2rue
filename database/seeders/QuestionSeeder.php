<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        $quizzes = Quiz::all();
        $users = User::all();

        foreach ($quizzes as $quiz) {
                DB::table('questions')->insert([
                    [
                    'question' => 'Quel est le nom de la plus haute montagne du monde ?',
                    'quiz_id' => $quiz->id,
                    'true_or_false' => false,
                    'multiple_answer' => true,
                    'one_answer' => false,
                    'user_id' => $users->random()->id,
                    'statut' => true,
                ],
                [
                    'question' => 'Quel est le nom de la première femme à avoir remporté un prix Nobel ?',
                    'quiz_id' => $quiz->id,
                    'true_or_false' => false,
                    'multiple_answer' => true,
                    'one_answer' => false,
                    'user_id' => $users->random()->id,
                    'statut' => true
                ],
                [
                    'question' => 'Combien de planètes gravitent autour du soleil ?',
                    'quiz_id' => $quiz->id,
                    'true_or_false' => false,
                    'multiple_answer' => false,
                    'one_answer' => true,
                    'user_id' => $users->random()->id,
                    'statut' => true
                ],
                [
                    'question' => 'Quel est le nom de la capitale de l\'Italie ?',
                    'quiz_id' => $quiz->id,
                    'true_or_false' => false,
                    'multiple_answer' => true,
                    'one_answer' => false,
                    'user_id' => $users->random()->id,
                    'statut' => true
                ],
                [
                    'question' => 'De quel pays provient le kangourou ?',
                    'quiz_id' => $quiz->id,
                    'true_or_false' => false,
                    'multiple_answer' => false,
                    'one_answer' => true,
                    'user_id' => $users->random()->id,
                    'statut' => true
                ]]
                );
        }
    }
}
