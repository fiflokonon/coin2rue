<?php

namespace App\Http\Livewire\Dashboard\Moduless;

use App\Models\Module;
use Livewire\Component;
use App\Models\Formation;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AddModulesComponent extends Component
{
    use WithFileUploads;

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

        $filenameImage = time() . '.' . $this->image_link->extension();
        $pathImage = $this->image_link->storeAs(
            'ImageModule',
            $filenameImage,
            'public'
        );

        $module->image_link = $pathImage;
        $module->created_by = Auth::user()->id;
        $module->titre = $this->titre;
        $module->formation_id = $this->formation_id;
        $module->description = $this->description;
        $module->save();

        // session()->flash('message', 'Enregistrement effectué avec succès.');
        return redirect()->route('addmodule', $this->formation_id)->with('message', 'Enregistrement effectué avec succès.');
        $this->resetInputFields();

    }
    public function render()
    {

        return view('livewire.dashboard.moduless.add-modules-component',[
        ])->layout('layouts.dashboard');
    }
}
