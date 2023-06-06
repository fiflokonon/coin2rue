<?php

namespace App\Http\Livewire\Site\Formations;


use App\Models\Formation;
use App\Models\Module;
use App\Models\Progression;
use App\Models\Quiz;
use App\Models\QuizUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PhpParser\Node\Expr\AssignOp\Mod;

class QuizComponent extends Component
{
    public $quiz_id;
    public $pourcentage;
    public $reponsesUtilisateur = [];
    public $correctionMode = false; // Nouvelle variable pour activer le mode de correction

    public function mount($id)
    {
        $this->quiz_id = $id;
    }

    public function render()
    {
        $quiz = Quiz::find($this->quiz_id);
        $pourcentage = $this->pourcentage;
        return view('livewire.site.formations.quiz-component', [
            'quiz' => $quiz,
            'lecon' => $quiz->lecon,
            'pourcentage' => $pourcentage
        ]);
    }

    public function correction()
    {
        $quiz = Quiz::find($this->quiz_id);
        $totalQuestions = $quiz->questions->count();
        $totalCorrectes = 0;

        foreach ($quiz->questions as $question) {
            $reponseCorrecte = $question->reponses->where('juste', true)->pluck('id')->toArray();

            if (isset($this->reponsesUtilisateur[$question->id])) {
                if ($question->one_answer) {
                    $reponseDonnee = $this->reponsesUtilisateur[$question->id];

                    if (in_array($reponseDonnee, $reponseCorrecte)) {
                        $totalCorrectes++;
                    }
                } elseif ($question->multiple_answer) {
                    $reponsesDonnees = array_keys($this->reponsesUtilisateur[$question->id], true);

                    if (count($reponseCorrecte) === count($reponsesDonnees) && empty(array_diff($reponseCorrecte, $reponsesDonnees))) {
                        $totalCorrectes++;
                    }
                }
            }
        }
        $this->pourcentage = ($totalCorrectes / $totalQuestions) * 100;
        $this->correctionMode = true;
        //Si le pourcentage dépasse la limite d'acceptation
        if ($this->pourcentage >= $quiz->pass_mark)
        {
            //On check l'existence d'une certaine validation du quiz
            $quiz_user = QuizUser::where('user_id', Auth::user()->id)->where('quiz_id', $quiz->id)->first();
            if ($quiz_user){
                //Si une validation existe, on vérifie si elle est déjà validée
                if ($quiz_user->valide){
                    //Si elle l'est on exécute updateProgression pour mettre les pourcentages de progressions au niveau du quiz
                    $this->updateProgression();
                }
                else
                {
                    $quiz_user->valide = true;
                    $quiz_user->save();
                    $this->updateProgression();
                    $this->completeQuizInModule($quiz->id);
                }
            }
            else
            {
                $quiz_user = new QuizUser();
                $quiz_user->user_id = Auth::user()->id;
                $quiz_user->quiz_id = $quiz->id;
                $quiz_user->valide = true;
                $quiz_user->save();
                $this->updateProgression();
                $this->completeQuizInModule($quiz->id);
            }
        }
        return $this->render();
    }

    public function updateProgression()
    {
        $quiz = Quiz::find($this->quiz_id);
        $user = Auth::user();
        $currentPercentage = $this->pourcentage;
        // Mettre à jour la progression du quiz
        $existingProgression = Progression::where('progressionable_id', $quiz->id)
            ->where('progressionable_type', 'App\Models\Quiz')
            ->where('user_id', $user->id)
            ->first();
        if ($existingProgression)
        {
            if ($currentPercentage > $existingProgression->pourcentage)
            {
                $existingProgression->pourcentage = $currentPercentage;
                $existingProgression->save();
            }
        }
        else
        {
            $progression = new Progression();
            $progression->progressionable_id = $quiz->id;
            $progression->progressionable_type = 'App\Models\Quiz';
            $progression->user_id = $user->id;
            $progression->pourcentage = $currentPercentage;
            $progression->save();
        }
    }

    public function completeQuizInModule(string $quiz_id){
        $quiz_complete = Quiz::find($quiz_id);
        if ($quiz_complete){
            $module_complete = Module::find($quiz_complete->quizable_id);
            if ($module_complete){
                $existingProgression = Progression::where('progressionable_id', $module_complete->id)
                    ->where('progressionable_type', 'App\Models\Module')
                    ->where('user_id', Auth::user()->id)
                    ->first();
                if ($existingProgression){
                    $existingProgression->pourcentage = $existingProgression->pourcentage + 20;
                    $existingProgression->save();
                    $this->updateFormationProgression($module_complete->id);
                }else{
                    $module_progression = new Progression();
                    $module_progression->progressionable_id = $module_complete->id;
                    $module_progression->progressionable_type = 'App\Models\Module';
                    $module_progression->user_id = Auth::user()->id;
                    $module_progression->pourcentage = 20;
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
