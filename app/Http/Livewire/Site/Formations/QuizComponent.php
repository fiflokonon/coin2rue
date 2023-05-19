<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Lecon;
use App\Models\Quiz;
use Illuminate\Http\Request;
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
        #dd($this->reponsesUtilisateur);
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
        return $this->render();
    }

}
