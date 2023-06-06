<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Lecon;
use App\Models\LeconUser;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OneLeconComponent extends Component
{
    public $lecon_id;
    public function mount($id)
    {
        $this->lecon_id = $id;
    }
    public function render()
    {
        $lecon = Lecon::find($this->lecon_id);
        $module = Module::find($lecon->module_id);
        return view('livewire.site.formations.one-lecon-component',[
            'lecon' => $lecon,
            'lecons' => $module->lecons,
            'module' => $lecon->module
        ]);
    }

    public function valide()
    {
        $existingLeconUser = LeconUser::where('lecon_id', $this->lecon_id)->where('user_id', Auth::user()->id)->first();
        if ($existingLeconUser){
            if (!$existingLeconUser->valide){
                $existingLeconUser->valide = true;
                $existingLeconUser->save();
            }
        }else{
            LeconUser::create([
                'lecon_id' => $this->lecon_id,
                'user_id' => Auth::user()->id,
                'valide' => true
            ]);
        }
    }
}
