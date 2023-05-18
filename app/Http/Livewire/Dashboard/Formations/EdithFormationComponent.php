<?php

namespace App\Http\Livewire\Dashboard\Formations;

use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class EdithFormationComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.formations.edith-formation-component');
    }

    public function editFormation(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $formation = Formation::find($id);
        if (!$formation) {
            return back()->withErrors(['message' => 'Formation non trouvée']);
        }
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'duree' => 'required|integer',
        ]);
        $formation->titre = $validatedData['titre'];
        $formation->description = $validatedData['description'];
        $formation->duree = $validatedData['duree'];
        $formation->save();
        return redirect('/');
    }

}
