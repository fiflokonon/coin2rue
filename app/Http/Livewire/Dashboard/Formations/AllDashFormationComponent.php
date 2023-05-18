<?php

namespace App\Http\Livewire\Dashboard\Formations;

use Livewire\Component;

class AllDashFormationComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.formations.all-dash-formation-component')->layout('layouts.dashboard');
    }
}
