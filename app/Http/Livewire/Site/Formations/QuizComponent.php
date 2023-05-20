<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Lecon;
use App\Models\Quiz;
use Livewire\Component;

class QuizComponent extends Component
{
    public $quiz_id;
    public function mount($id)
    {
        $this->quiz_id = $id;
    }
    public function render()
    {
        $quiz = Quiz::find($this->quiz_id);
        return view('livewire.site.formations.quiz-component',[
            'quiz' => $quiz,
            'lecon' => $quiz->lecon
        ]);
    }

    public $reponsesUtilisateur = [];
    public $pourcentage = 0;

    public function correction()
    {
        // Effectuez ici la logique de correction et de calcul du pourcentage
        // en utilisant les données stockées dans $this->reponsesUtilisateur
        // et mettez à jour la valeur de $this->pourcentage

        // Exemple :
        $totalQuestions = $quiz->questions->count();
        $totalCorrectes = 0;

        // ...

        $this->pourcentage = ($totalCorrectes / $totalQuestions) * 100;
    }
}
