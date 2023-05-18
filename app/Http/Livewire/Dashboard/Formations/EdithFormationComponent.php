<?php

namespace App\Http\Livewire\Dashboard\Formations;

use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class EdithFormationComponent extends Component
{


    public $titre;
    public $prix;
    public $image;
    public $description;
    public $duree;
    public $user_id;
    public $formation_id;



    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'prix','image', 'duree','description']);

    }

    public function mount($id) {

        $formation = Formation::where('id', $id)->first();

        $this->formation_id = $id;
        $this->titre = $formation->titre;
        $this->prix = $formation->prix;
        $this->duree =  $formation->duree;
        $this->image = $formation->image;
        $this->description = $formation->description;
        $this->user_id = $formation->user_id;
    }

    public function saveFormation()
    {
            $this->validate([
                'titre' =>  'required',
                'prix' =>  'required',
                'duree' =>  'required',
                // 'image' =>  'required',
                // 'description' => 'required',
            ]);

            // dd($this->description);

        $formation = Formation::find($this->formation_id);

        $formation->user_id = $this->user_id;
        $formation->titre = $this->titre;
        $formation->prix = $this->prix;
        $formation->duree = $this->duree;
        $formation->description = $this->description;
        $formation->save();


       session()->flash('message', 'Modification effectué avec succès.');
       $this->resetInputFields();

    }

    public function render()
    {
        return view('livewire.dashboard.formations.edith-formation-component')->layout('layouts.dashboard');
    }

}
