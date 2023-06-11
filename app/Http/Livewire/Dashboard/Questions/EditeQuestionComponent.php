<?php

namespace App\Http\Livewire\Dashboard\Questions;

use Livewire\Component;

class EditeQuestionComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.questions.edite-question-component')->layout('layouts.dashboard');
    }
}
