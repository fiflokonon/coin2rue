<?php

namespace App\Http\Livewire\Dashboard\Lecons;

use App\Models\Lecon;
use Livewire\Component;
use Livewire\WithPagination;

class AllLeconsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $module_id;
    public function mount($id) {
        $this->module_id = $id;
    }
    public function render()
    {
        $lecons = Lecon::where('module_id',$this->module_id)->paginate(10);

        return view('livewire.dashboard.lecons.all-lecons-component',[
            'lecons'=> $lecons,
        ])->layout('layouts.dashboard');
    }
}
