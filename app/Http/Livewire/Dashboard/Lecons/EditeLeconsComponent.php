<?php

namespace App\Http\Livewire\Dashboard\Lecons;

use App\Models\Lecon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class EditeLeconsComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.lecons.edite-lecons-component');
    }

    public function editLecon(Request $request, $leconId)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $lecon = Lecon::find($leconId);
        if (!$lecon) {
            return back()->withErrors(['message' => 'Leçon non trouvéé']);
        }
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'contenu' => 'nullable|string',
            'image_link' => 'nullable|string',
        ]);

        // Mettre à jour les attributs de la leçon
        $lecon->titre = $validatedData['titre'];
        $lecon->description = $validatedData['description'];
        $lecon->contenu = $validatedData['contenu'];
        $lecon->image_link = $validatedData['image_link'];
        $lecon->save();

        return redirect('/');
    }

}
