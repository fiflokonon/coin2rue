<?php

namespace App\Http\Livewire\Dashboard\Moduless;

use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class EditeModulesComponent extends Component
{
    public $titre;
    public $image_link;
    public $old_image_link;
    public $formation_id;
    public $description;
    public $module_id;
    public $lecon_id;
    public $created_by;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['titre', 'image_link','formation_id', 'module_id','description']);

    }

    public function mount($id) {

        $module = Module::where('id', $id)->first();

        $this->module_id = $id;
        $this->titre = $module->titre;
        $this->image_link = $module->image_link;
        $this->old_image_link = $module->image_link;
        $this->formation_id =  $module->formation_id;
        $this->description = $module->description;
        $this->created_by = $module->created_by;
    }

    public function saveModule()
    {
            $this->validate([
                'titre' =>  'required',
                'formation_id' =>  'required',
                'created_by' =>  'required',
                // 'image' =>  'required',
                // 'description' => 'required',
            ]);

            // dd($this->description);

        $module = Module::find($this->module_id);

        if($this->image_link == $this->old_image_link || $this->image_link == null)
        {
            $module->image_link = $this->old_image_link;
            // dd('ok');


        }else{
            $filenameImage = time() . '.' . $this->image_link->extension();
            $pathImage = $this->image_link->storeAs(
                'ImageModel',
                $filenameImage,
                'public'
            );

            $module->image_link = $pathImage;
        }

        $module->created_by = $this->created_by;
        $module->titre = $this->titre;
        $module->formation_id = $this->formation_id;
        $module->description = $this->description;
        $module->save();
       return redirect()->route('addmodule', $this->formation_id)->with('message', 'Modification effectué avec succès.');
       $this->resetInputFields();

    }
    public function render()
    {
        return view('livewire.dashboard.moduless.edite-modules-component')->layout('layouts.dashboard');
    }

}
