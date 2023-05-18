<?php

namespace App\Http\Livewire\Dashboard\Formations;

use App\Models\Formation;
use Livewire\Component;

class AllDashFormationComponent extends Component
{
    public function render()
    {
        $formation_actives = Formation::where('statut_admin', true)->get();
        $formation_inactives = Formation::where('statut_admin', false)->get();
        return view('livewire.dashboard.formations.all-dash-formation-component', [
            'formation_actives' => $formation_actives,
            'formation_inactives' => $formation_inactives
        ])->layout('layouts.dashboard');
    }

}
