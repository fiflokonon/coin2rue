<?php

namespace App\Http\Livewire\Dashboard\Formations;

use Livewire\Component;
use App\Models\Formation;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;


class EdithFormationComponent extends Component
{
    use WithFileUploads;

    public $titre;
    public $prix;
    public $image_link,$old_image_link;
    public $description;
    public $duree;
    public $user_id;
    public $formation_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'prix','image_link', 'duree','description']);

    }

    public function mount($id) {

        $formation = Formation::where('id', $id)->first();

        $this->formation_id = $id;
        $this->titre = $formation->titre;
        $this->prix = $formation->prix;
        $this->duree =  $formation->duree;
        $this->image_link = $formation->image_link;
        $this->old_image_link = $formation->image_link;
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
            // dd($this->image_link, $this->old_image_link);


        if($this->image_link == $this->old_image_link || $this->image_link == null)
        {
            $formation->image_link = $this->old_image_link;
            // dd('ok');


        }else{
            $filenameImage = time() . '.' . $this->image_link->extension();
            $pathImage = $this->image_link->storeAs(
                'ImageFormation',
                $filenameImage,
                'public'
            );

            $formation->image_link = $pathImage;
        }



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
