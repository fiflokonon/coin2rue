<?php

namespace App\Http\Livewire\Dashboard\Moduless;

use App\Models\Formation;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AddModulesComponent extends Component
{
    public $titre;
    public $image_link;
    public $description;
    public $formation_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'image_link', 'formation_id','description']);

    }
    public function mount($id) {
        $this->formation_id = $id;
    }

    public function saveModule()
    {
            $this->validate([
                'titre' =>  'required',
                // 'image_link' =>  'required',
                'formation_id' =>  'required',
                // 'image' =>  'required',
                // 'description' => 'required',
            ]);

            // dd($this->description);

        $module = new Module();

        $module->created_by = Auth::user()->id;
        $module->titre = $this->titre;
        $module->image_link = $this->image_link;
        $module->formation_id = $this->formation_id;
        $module->description = $this->description;
        $module->save();

       session()->flash('message', 'Enregistrement effectué avec succès.');
       $this->resetInputFields();
    }
    public function render()
    {

        return view('livewire.dashboard.moduless.add-modules-component',[
        ])->layout('layouts.dashboard');
    }
}
