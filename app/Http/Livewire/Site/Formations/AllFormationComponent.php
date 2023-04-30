<?php

namespace App\Http\Livewire\Site\Formations;

use Livewire\Component;
use App\Models\Formation;

class AllFormationComponent extends Component
{
    public function render()
    {
        $formations = Formation::all();
        return view('livewire.site.formations.all-formation-component',[
            'formations' => $formations,
        ]);
    }
}
