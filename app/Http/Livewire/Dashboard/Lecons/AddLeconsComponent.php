<?php

namespace App\Http\Livewire\Dashboard\Lecons;

use App\Models\Lecon;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AddLeconsComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.lecons.add-lecons-component');
    }

    public function addLecon(Request $request, $moduleId)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $module = Module::find($moduleId);
        if (!$module) {
            return back()->withErrors(['message' => 'Module non trouvé']);
        }
        // Valider les données de la requête
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'contenu' => 'required|text',
            'image_link' => 'required|string',
        ]);
        $lecon = new Lecon();
        $lecon->titre = $validatedData['titre'];
        $lecon->description = $validatedData['description'];
        $lecon->contenu = $validatedData['contenu'];
        $lecon->image_link = $validatedData['image_link'];
        $lecon->module_id = $moduleId;
        $lecon->user_id = \auth()->user()->id;
        $lecon->statut = true;
        $lecon->save();

        return redirect('/');
    }

}
