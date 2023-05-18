<?php

namespace App\Http\Livewire\Dashboard\Moduless;

use App\Models\Formation;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AddModulesComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.moduless.add-modules-component');
    }

    public function addModule(Request $request, $formationId)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $formation = Formation::find($formationId);
        if (!$formation) {
            return back()->withErrors(['message' => 'Formation non trouvée']);
        }
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'image_link' => 'nullable|string'
        ]);
        $module = new Module();
        $module->titre = $validatedData['titre'];
        $module->description = $validatedData['description'];
        $module->image_link = $validatedData['image_link'];
        $module->statut = true;
        $module->created_by = \auth()->user()->id;
        $module->formation_id = $formation->id;
        $module->save();

        return redirect('/');
    }

}
