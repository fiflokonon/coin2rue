<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Formation;
use App\Models\Module;
use App\Models\Progression;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OneFormationComponent extends Component
{
    public $formation_id;
    public function mount($id)
    {
        $this->formation_id = $id;
    }

    /** COMMENCER UN MODULE */
    public function startModule(int $module_id)
    {
        if (Auth::check())
        {
            $module = Module::findOrFail($module_id);
            if ($module)
            {
                $progression_module = Auth::user()->progressions()
                    ->where('progressionable_id', $module->id)
                    ->where('progressionable_type', 'App\Models\Module')
                    ->first();
                if ($progression_module)
                {
                    return redirect()->back()->with(['error' => 'Vous avez déjà commencé le module']);
                }
                else
                {
                    $progression = new Progression();
                    $progression->user_id = auth()->user()->id;
                    $progression->progressionable_id = $module->id;
                    $progression->progressionable_type = 'App\Models\Module';
                    $progression->pourcentage = 0;
                    $progression->save();
                    return redirect()->route('lecons', ['id' => $module->id]);
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
        $formation = Formation::find($this->formation_id);
        return view('livewire.site.formations.one-formation-component',[
            'formation' => $formation,
        ]);
    }
}
