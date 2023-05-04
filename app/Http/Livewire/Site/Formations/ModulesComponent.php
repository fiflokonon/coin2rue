<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Formation;
use App\Models\Module;
use Livewire\Component;

class ModulesComponent extends Component
{
    public $module_id;
    public function mount($id)
    {
        $this->module_id = $id;
    }
    public function render()
    {
        $module = Module::find($this->module_id);
        return view('livewire.site.formations.modules-component',[
            'module' => $module,
            'formation' => $module->formation
        ]);
    }
}
