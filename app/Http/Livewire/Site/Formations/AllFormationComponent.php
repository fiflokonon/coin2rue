<?php

namespace App\Http\Livewire\Site\Formations;

use Livewire\Component;
use App\Models\Formation;

class AllFormationComponent extends Component
{
    public function render()
    {
        /*$user = auth()->user();
        $progressions = $user->progressions()->orderByDesc('created_at')->get();
        $formationsTriees = [];
        foreach ($formations as $formation) {
            // Vérifier si l'utilisateur a déjà une progression correspondante à cette formation
            $progressionExistante = $progressions->contains(function ($value) use ($formation) {
                return $value->progressionnable_type === 'Formation' && $value->progressionnable_id === $formation->id;
            });
            // Ajouter la formation à la liste triée, en haut si une progression existe, en bas sinon
            if ($progressionExistante) {
                array_unshift($formationsTriees, $formation);
            } else {
                $formationsTriees[] = $formation;
            }
        }
        */
        $formations = Formation::all();
        #dd(auth()->user());
        return view('livewire.site.formations.all-formation-component',[
            'formations' => $formations,
        ]);
    }
}
