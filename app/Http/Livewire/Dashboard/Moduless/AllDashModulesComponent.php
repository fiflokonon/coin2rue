<?php

namespace App\Http\Livewire\Dashboard\Moduless;

use App\Models\Module;
use Livewire\Component;
use Livewire\WithPagination;

class AllDashModulesComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $formation_id;
    public function mount($id) {
        $this->formation_id = $id;
    }
    public function render()
    {
        $modules = Module::where('formation_id',$this->formation_id)->paginate(10);
        // dd($modules);
        return view('livewire.dashboard.moduless.all-dash-modules-component',[
            'modules' => $modules,
        ])->layout('layouts.dashboard');
    }
}
