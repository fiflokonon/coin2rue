<?php

namespace App\Http\Livewire\Dashboard\Formations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AddFormationComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.formations.add-formation-component');
    }

    public function addFormation(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'duree' => 'required|integer',
        ]);

        $formation = new Formation();
        $formation->titre = $validatedData['titre'];
        $formation->description = $validatedData['description'];
        $formation->duree = $validatedData['duree'];
        $formation->user_id = auth()->user()->id;
        $formation->statut = true;
        $formation->statut_admin = false;
        $formation->save();
        return redirect('/');
    }

}
