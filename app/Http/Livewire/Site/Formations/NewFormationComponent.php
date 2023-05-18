<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Lecon;
use Livewire\Component;

class NewFormationComponent extends Component
{
    public $lecon_id;
    public function mount($id)
    {
        $this->lecon_id = $id;
    }
    public function render()
    {
        $lecon = Lecon::find($this->lecon_id);
        return view('livewire.site.formations.new-formation-component',[
            'lecon' => $lecon,
            'module' => $lecon->module
        ]);
    }
}
