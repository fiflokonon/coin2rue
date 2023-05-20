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
        $users = User::all();
        $questions = Question::all();

        foreach ($questions as $question) {
            if ($question->multiple_answer) {
                // Génération de réponses pour les questions à choix multiple
                $reponses = [
                    ['reponse' => 'Réponse 1', 'juste' => true],
                    ['reponse' => 'Réponse 2', 'juste' => false],
                    ['reponse' => 'Réponse 3', 'juste' => true],
                    // Ajoutez d'autres réponses si nécessaire
                ];
            } elseif ($question->one_answer) {
                // Génération de réponses pour les questions à choix unique
                $reponses = [
                    ['reponse' => 'Réponse 1', 'juste' => false],
                    ['reponse' => 'Réponse 2', 'juste' => true],
                    ['reponse' => 'Réponse 3', 'juste' => false],
                    // Ajoutez d'autres réponses si nécessaire
                ];
            } else {
                // Génération de réponses pour les autres types de questions (true_or_false, etc.)
                $reponses = [
                    ['reponse' => 'Réponse 1', 'juste' => true],
                    ['reponse' => 'Réponse 2', 'juste' => false],
                    // Ajoutez d'autres réponses si nécessaire
                ];
            }

            // Création des réponses associées à la question
            foreach ($reponses as $reponse) {
                Reponse::create([
                    'question_id' => $question->id,
                    'reponse' => $reponse['reponse'],
                    'juste' => $reponse['juste'],
                    'user_id' => 1
                ]);
            }
        }
    }
}
