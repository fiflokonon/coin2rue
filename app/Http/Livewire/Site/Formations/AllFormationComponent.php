<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Progression;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Formation;

class AllFormationComponent extends Component
{
    /** COMMENCER UNE FORMATION */
    public function startFormation(int $formation_id)
    {
        if (Auth::check())
        {
            $formation = Formation::findOrFail($formation_id);
            if ($formation)
            {
                $progression_formation = Auth::user()->progressions()
                    ->where('progressionable_id', $formation->id)
                    ->where('progressionable_type', 'App\Models\Formation')
                    ->first();
                if ($progression_formation)
                {
                    return redirect()->back()->with(['error' => 'Vous avez déjà commencé la formation']);
                }
                else
                {
                    $progression = new Progression();
                    $progression->user_id = auth()->user()->id;
                    $progression->progressionable_id = $formation_id;
                    $progression->progressionable_type = 'App\Models\Formation';
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
        $formation_actives = Formation::where('statut_admin', true)->get();
        $formation_inactives = Formation::where('statut_admin', false)->get();
        return view('livewire.site.formations.all-formation-component',[
            'formation_actives' => $formation_actives,
            'formation_inactives' => $formation_inactives
        ]);
    }
}
