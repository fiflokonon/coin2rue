<?php

namespace App\Http\Livewire\Dashboard\Quiz;

use App\Models\Quiz;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddQuizComponent extends Component
{
    public $titre;
    public $pass_mark;
    public $description;
    public $module_id;
    public $user_id;


    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['description','pass_mark','user_id','module_id']);

    }
    public function mount($id) {
        $this->module_id = $id;
    }

    public function saveQuiz()
    {
            // $this->validate([
            //     'question' =>  'required',
            //     'quiz_id' =>  'required',
            //     'user_id' =>  'required',
            //     'commentaire' =>  'required',
            // ]);

            // dd($this->description);

        $module = new Quiz();

        $module->quizable_type = '\App\Models\Module';
        $module->user_id = Auth::user()->id;
        $module->titre = $this->titre;
        $module->quizable_id = $this->module_id;
        $module->description = $this->description;
        $module->pass_mark = $this->pass_mark;
        $module->save();

        // session()->flash('message', 'Enregistrement effectué avec succès.');
        return redirect()->route('addquiz', $this->module_id)->with('message', 'Enregistrement effectué avec succès.');
        $this->resetInputFields();

    }
    public function render()
    {
        return view('livewire.dashboard.quiz.add-quiz-component')->layout('layouts.dashboard');
    }
}
