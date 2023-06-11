<?php

namespace App\Http\Livewire\Dashboard\Lecons;

use App\Models\Lecon;
use App\Models\Module;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AddLeconsComponent extends Component
{
    use WithFileUploads;

    public $titre;
    public $image_link;
    public $contenu = "mon texte";
    public $description;
    public $module_id;
    public $ordre;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'image_link','contenu', 'module_id','description','ordre']);

    }

    public function mount($id) {
        $this->module_id = $id;
    }

    public function saveLecon()
    {
            $this->validate([
                'titre' =>  'required',
                // 'image_link' =>  'required',
                'module_id' =>  'required',
                // 'module_id' =>  'required',
                // 'image' =>  'required',
                // 'description' => 'required',
            ]);

            // dd($this->description);

        $lecon = new Lecon();
        $filenameImage = time() . '.' . $this->image_link->extension();
        $pathImage = $this->image_link->storeAs(
            'ImageLecon',
            $filenameImage,
            'public'
        );

        $lecon->image_link = $pathImage;

        $lecon->user_id = Auth::user()->id;
        $lecon->titre = $this->titre;
        $lecon->contenu = $this->contenu;
        $lecon->module_id = $this->module_id;
        $lecon->description = $this->description;
        $lecon->save();
        return redirect()->route('addlecon', $this->module_id)->with('message', 'Enregistrement effectué avec succès.');
    //    session()->flash('message', 'Enregistrement effectué avec succès.');
       $this->resetInputFields();
    }

    public function render()
    {
        return view('livewire.dashboard.lecons.add-lecons-component')->layout('layouts.dashboard');
    }
}
