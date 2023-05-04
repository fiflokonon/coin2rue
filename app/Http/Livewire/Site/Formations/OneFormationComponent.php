<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Formation;
use Livewire\Component;

class OneFormationComponent extends Component
{
    public $formation_id;
    public function mount($id)
    {
        $this->formation_id = $id;
    }
    public function render()
    {
        $formation = Formation::find($this->formation_id);
        return view('livewire.site.formations.one-formation-component',[
            'formation' => $formation,
        ]);
    }
}
