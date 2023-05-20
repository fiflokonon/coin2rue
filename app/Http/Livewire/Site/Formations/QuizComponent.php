<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Lecon;
use App\Models\Module;
use App\Models\Progression;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuizComponent extends Component
{
    public $quiz_id;
    public $pourcentage;
    public $reponsesUtilisateur = [];
    public function mount($id)
    {
        $this->quiz_id = $id;
    }
    public function render()
    {
        $quiz = Quiz::find($this->quiz_id);
        $pourcentage = $this->pourcentage;

        return view('livewire.site.formations.quiz-component', [
            'quiz' => $quiz,
            'lecon' => $quiz->lecon,
            'pourcentage' => $pourcentage
        ]);
    }


    public function correction()
    {
        $quiz = Quiz::find($this->quiz_id);
        $totalQuestions = $quiz->questions->count();
        $totalCorrectes = 0;
        foreach ($quiz->questions as $question) {
            $reponseCorrecte = $question->reponses->where('juste', true)->pluck('id')->toArray();
            if (isset($this->reponsesUtilisateur[$question->id])) {
                if ($question->one_answer) {
                    $reponseDonnee = $this->reponsesUtilisateur[$question->id];
                    if (in_array($reponseDonnee, $reponseCorrecte)) {
                        $totalCorrectes++;
                    }
                } elseif ($question->multiple_answer) {
                    $reponsesDonnees = array_keys($this->reponsesUtilisateur[$question->id], true);
                    if (count($reponseCorrecte) === count($reponsesDonnees) && empty(array_diff($reponseCorrecte, $reponsesDonnees))) {
                        $totalCorrectes++;
                    }
                }
            }
        }
        $this->pourcentage = ($totalCorrectes / $totalQuestions) * 100;
        $this->updateProgression();
        return $this->render();
    }

    public function updateProgression()
    {
        $quiz = Quiz::find($this->quiz_id);
        $module = Module::find($quiz->quizable_id);
        $user = Auth::user();
        $passMark = $quiz->pass_mark;
        $currentPercentage = $this->pourcentage;
        $totalQuiz = $module->quiz->count();

        // Mettre à jour la progression du quiz
        $existingProgression = Progression::where('progressionable_id', $quiz->id)
            ->where('user_id', $user->id)
            ->first();

        if ($existingProgression) {
            if ($currentPercentage > $existingProgression->pourcentage) {
                $existingProgression->pourcentage = $currentPercentage;
                $existingProgression->save();
            }
        } else {
            $progression = new Progression();
            $progression->progressionable_id = $quiz->id;
            $progression->progressionable_type = 'App\Models\Quiz';
            $progression->user_id = $user->id;
            $progression->pourcentage = $currentPercentage;
            $progression->save();
        }

        // Mettre à jour la progression du module
        $moduleProgression = 0;

        if (!$existingProgression) {
            $completedQuizCount = Progression::where('progressionable_type', 'App\Models\Quiz')
                ->where('user_id', $user->id)
                ->where('pourcentage', '>=', $passMark)
                ->count();

            $moduleProgression = ($completedQuizCount / $totalQuiz) * 100;
        }

        // Mettre à jour la progression de la formation
        $formation = $module->formation;
        $moduleCount = $formation->modules->count();
        $formationProgression = 0;

        if ($moduleProgression == 100) {
            $completedModuleCount = Progression::where('progressionable_type', 'App\Models\Module')
                ->where('user_id', $user->id)
                ->where('pourcentage', '>=', 100)
                ->count();

            $formationProgression = ($completedModuleCount / $moduleCount) * 100;
        }

        // Mettre à jour la progression de la formation
        $formationProgression = max($formationProgression, $moduleProgression);

        $formationProgression = min($formationProgression, 100); // Limiter le pourcentage à 100 (complété)

        Progression::updateOrCreate(
            [
                'user_id' => $user->id,
                'progressionable_id' => $formation->id,
                'progressionable_type' => 'App\Models\Formation',
            ],
            [
                'pourcentage' => $formationProgression,
            ]
        );
    }
}
