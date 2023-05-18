<?php

namespace App\Http\Livewire\Dashboard\Moduless;

use App\Models\Formation;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AddModulesComponent extends Component
{
    public $formation_id;
    public function mount($id) {


        $this->formation_id = $id;

    }
    public function render()
    {

        return view('livewire.dashboard.moduless.add-modules-component',[
        ])->layout('layouts.dashboard');
    }
}
