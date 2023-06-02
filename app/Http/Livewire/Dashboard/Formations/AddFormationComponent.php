<?php

namespace App\Http\Livewire\Dashboard\Formations;

use Livewire\Component;
use App\Models\Formation;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AddFormationComponent extends Component
{
    use WithFileUploads;
    public $titre;
    public $prix;
    public $image_link;
    public $description;
    public $duree;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'prix','image_link', 'duree','description']);

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

        $filenameImage = time() . '.' . $this->image_link->extension();
        $pathImage = $this->image_link->storeAs(
            'ImageFormation',
            $filenameImage,
            'public'
        );

        $formation->image_link = $pathImage;
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
