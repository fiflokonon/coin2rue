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
        // dd($this->formation_id);
    }
    public function render()
    {
        $formation = Formation::find($this->formation_id);
        // dd($formation);

        return view('livewire.site.formations.one-formation-component',[
            'formation' => $formation,
        ]);
    }
}
