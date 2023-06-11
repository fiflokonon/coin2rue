<?php

namespace App\Http\Livewire\Dashboard\Questions;

use Livewire\Component;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class AddQuestionComponent extends Component
{

    public $question;
    public $commentaire;
    public $quiz_id;
    public $true_or_false;
    public $multiple_answer;
    public $one_answer;
    public $user_id;
    public $statut;
    public $module_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['question', 'commentaire', 'quiz_id','true_or_false','multiple_answer','one_answer','user_id','statut','module_id']);

    }
    public function mount($id) {
        $this->module_id = $id;
    }

    public function saveQuestion()
    {
            // $this->validate([
            //     'question' =>  'required',
            //     'quiz_id' =>  'required',
            //     'user_id' =>  'required',
            //     'commentaire' =>  'required',
            // ]);

            dd($this->commentaire);

        $module = new Question();

        $module->question = $this->question;
        $module->user_id = Auth::user()->id;
        $module->titre = $this->commentaire;
        $module->quiz_id = $this->quiz_id;
        $module->true_or_false = $this->true_or_false;
        $module->multiple_answer = $this->multiple_answer;
        $module->one_answer = $this->one_answer;
        $module->statut = $this->statut;
        $module->save();

        // session()->flash('message', 'Enregistrement effectué avec succès.');
        return redirect()->route('addlecon', $this->module_id)->with('message', 'Enregistrement effectué avec succès.');
        $this->resetInputFields();

    }
    public function render()
    {
        $quizz = Quiz::where('quizable_id', $this->module_id)->get();
        return view('livewire.dashboard.questions.add-question-component',[
            'quizz' => $quizz,
        ])->layout('layouts.dashboard');
    }
}
