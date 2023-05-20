<?php

namespace App\Http\Livewire\Dashboard\Lecons;

use App\Models\Lecon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class EditeLeconsComponent extends Component
{
    public $titre;
    public $image_link;
    public $contenu;
    public $description;
    public $module_id;
    public $lecon_id;
    public $user_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'image_link','contenu', 'module_id','description']);

    }

    public function mount($id) {

        $lecon = Lecon::where('id', $id)->first();

        $this->lecon_id = $id;
        $this->titre = $lecon->titre;
        $this->image_link = $lecon->image_link;
        $this->contenu =  $lecon->contenu;
        $this->module_id = $lecon->module_id;
        $this->description = $lecon->description;
        $this->user_id = $lecon->user_id;
    }

    public function saveLecon()
    {
            $this->validate([
                'titre' =>  'required',
                'module_id' =>  'required',
                'user_id' =>  'required',
                // 'image' =>  'required',
                // 'description' => 'required',
            ]);

            // dd($this->description);

        $lecon = Lecon::find($this->lecon_id);

        $lecon->user_id = $this->user_id;
        $lecon->titre = $this->titre;
        $lecon->image_link = $this->image_link;
        $lecon->contenu = $this->contenu;
        $lecon->module_id = $this->module_id;
        $lecon->description = $this->description;
        $lecon->save();

       session()->flash('message', 'Modification effectué avec succès.');
       $this->resetInputFields();

    }
    public function render()
    {
        return view('livewire.dashboard.lecons.edite-lecons-component')->layout('layouts.dashboard');
    }
}
