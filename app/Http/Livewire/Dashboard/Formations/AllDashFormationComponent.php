<?php

namespace App\Http\Livewire\Dashboard\Formations;

use Livewire\Component;
use App\Models\Formation;
use Livewire\WithPagination;

class AllDashFormationComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $formations = Formation::orderBy('created_at', 'desc')->paginate(10);
        // dd($formations);

        $formation_actives = Formation::where('statut_admin', true)->get();
        $formation_inactives = Formation::where('statut_admin', false)->get();
        return view('livewire.dashboard.formations.all-dash-formation-component', [
            'formation_actives' => $formation_actives,
            'formation_inactives' => $formation_inactives,
            'formations' => $formations,

        ])->layout('layouts.dashboard');
    }

}
