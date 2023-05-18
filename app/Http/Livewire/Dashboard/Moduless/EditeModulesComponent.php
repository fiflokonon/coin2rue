<?php

namespace App\Http\Livewire\Dashboard\Moduless;

use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class EditeModulesComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.moduless.edite-modules-component');
    }

    public function editModule(Request $request, $moduleId)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $module = Module::find($moduleId);
        if (!$module) {
            return back()->withErrors(['message' => 'Module non trouvé']);
        }
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string',
            'image_link' => 'nullable|string',
        ]);
        $module->titre = $validatedData['titre'];
        $module->description = $validatedData['description'];
        $module->image_link = $validatedData['image_link'];
        $module->save();

        return redirect('/');
    }

}
