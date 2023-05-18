<?php

namespace App\Http\Livewire\Dashboard\Formations;

use Livewire\Component;

class AddFormationComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.formations.add-formation-component')->layout('layouts.dashboard');
    }
}
