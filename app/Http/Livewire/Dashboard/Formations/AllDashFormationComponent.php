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

        return view('livewire.dashboard.formations.all-dash-formation-component',[
            'formations' => $formations,
        ])->layout('layouts.dashboard');
    }
}
