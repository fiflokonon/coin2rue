<?php

namespace App\Http\Livewire\Site\Formations;

use App\Models\Formation;
use App\Models\Lecon;
use App\Models\LeconUser;
use App\Models\Module;
use App\Models\Progression;
use App\Models\Quiz;
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
        $leconUser = LeconUser::where('lecon_id', $this->lecon_id)->where('user_id', Auth::user()->id)->first();
        return view('livewire.site.formations.one-lecon-component',[
            'lecon' => $lecon,
            'lecons' => $module->lecons,
            'module' => $lecon->module,
            'lecon_user' => $leconUser
        ]);
    }

    public function valide()
    {
        $existingLeconUser = LeconUser::where('lecon_id', $this->lecon_id)->where('user_id', Auth::user()->id)->first();
        if ($existingLeconUser){
            if (!$existingLeconUser->valide){
                $existingLeconUser->valide = true;
                $existingLeconUser->save();
                $this->updateInModule($existingLeconUser->lecon_id);
            }
        }else{
            $leconUser = LeconUser::create([
                'lecon_id' => $this->lecon_id,
                'user_id' => Auth::user()->id,
                'valide' => true
            ]);
            $this->updateInModule($leconUser->lecon_id);
        }
    }

    public function updateInModule(string $lecon_id){
        $lecon_complete = Lecon::find($lecon_id);
        if ($lecon_complete){
            $module_complete = Module::find($lecon_complete->module_id);
            if ($module_complete){
                $existingProgression = Progression::where('progressionable_id', $module_complete->id)
                    ->where('progressionable_type', 'App\Models\Module')
                    ->where('user_id', Auth::user()->id)
                    ->first();
                if ($existingProgression){
                    $existingProgression->pourcentage = $existingProgression->pourcentage + intval(80 / $module_complete->lecons->count());
                    $existingProgression->save();
                    $this->updateFormationProgression($module_complete->id);
                }else{
                    $module_progression = new Progression();
                    $module_progression->progressionable_id = $module_complete->id;
                    $module_progression->progressionable_type = 'App\Models\Module';
                    $module_progression->user_id = Auth::user()->id;
                    $module_progression->pourcentage = intval(80 / $module_complete->lecons->count());
                    $module_progression->save();
                    $this->updateFormationProgression($module_complete->id);
                }
            }
        }
    }

    public function calculateFormationProgression($formation_id)
    {
        $formation = Formation::find($formation_id);
        if ($formation) {
            $totalModules = $formation->modules->count();
            $totalProgression = 0;
            foreach ($formation->modules as $module) {
                $moduleProgression = Progression::where('progressionable_id', $module->id)
                    ->where('progressionable_type', 'App\Models\Module')
                    ->where('user_id', Auth::user()->id)
                    ->first();
                if ($moduleProgression) {
                    $totalProgression += $moduleProgression->pourcentage;
                }
            }
            if ($totalModules > 0) {
                $formationProgression = $totalProgression / $totalModules;
            } else {
                $formationProgression = 0;
            }
            return $formationProgression;
        }
        return 0;
    }

    public function updateFormationProgression(string $module_id)
    {
        $module_update = Module::find($module_id);
        if ($module_update){
            $formation_update = Formation::find($module_update->formation_id);
            if ($formation_update){
                #$unity = intval(100 / $formation_update->modules->count());
                $existingProgression = Progression::where('progressionable_id', $formation_update->id)
                    ->where('progressionable_type', 'App\Models\Formation')
                    ->where('user_id', Auth::user()->id)
                    ->first();
                if ($existingProgression){
                    $existingProgression->pourcentage = intval($this->calculateFormationProgression($formation_update->id));
                    $existingProgression->save();
                }else{
                    $module_progression = new Progression();
                    $module_progression->progressionable_id = $formation_update->id;
                    $module_progression->progressionable_type = 'App\Models\Formation';
                    $module_progression->user_id = Auth::user()->id;
                    $module_progression->pourcentage = intval($this->calculateFormationProgression($formation_update->id));
                    $module_progression->save();
                }
            }
        }
    }
}
