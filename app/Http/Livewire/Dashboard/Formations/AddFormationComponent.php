<?php

namespace App\Http\Livewire\Dashboard\Formations;

use Livewire\Component;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;

class AddFormationComponent extends Component
{
    public $titre;
    public $prix;
    public $image;
    public $description;
    public $duree;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'prix','image', 'duree','description']);

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

        $formation = new Formation();

        $formation->user_id = Auth::user()->id;
        $formation->titre = $this->titre;
        $formation->prix = $this->prix;
        $formation->duree = $this->duree;
        $formation->description = $this->description;

        $formation->save();


       session()->flash('message', 'Enregistrement effectué avec succès.');
       $this->resetInputFields();

    }
    public function render()
    {

        return view('livewire.dashboard.formations.add-formation-component')->layout('layouts.dashboard');
    }
}
