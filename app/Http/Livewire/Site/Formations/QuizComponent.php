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
}
