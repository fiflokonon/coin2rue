<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Formation;
use App\Models\Module;
use App\Models\Progression;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ModulesComponent extends Component
{
    public $module_id;
    public function mount($id)
    {
        $this->module_id = $id;
    }

    public function startLecon(int $lecon_id)
    {
        if (Auth::check())
        {
            $lecon = Module::findOrFail($lecon_id);
            if ($lecon)
            {
                $progression_lecon = Auth::user()->progressions()
                    ->where('progressionable_id', $lecon->id)
                    ->where('progressionable_type', 'App\Models\Lecon')
                    ->first();
                if ($progression_lecon)
                {
                    return redirect()->back()->with(['error' => 'Vous avez déjà commencé la leçon']);
                }
                else
                {
                    $progression = new Progression();
                    $progression->user_id = auth()->user()->id;
                    $progression->progressionable_id = $lecon->id;
                    $progression->progressionable_type = 'App\Models\Lecon';
                    $progression->pourcentage = 0;
                    $progression->save();
                }
            }
        }
        else
        {
            return redirect('/login');
        }

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
