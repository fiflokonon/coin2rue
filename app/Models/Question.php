<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'question',
        'quiz_id',
        'true_or_false',
        'multiple_answer',
        'one_answer',
        'user_id',
        'statut'
    ];


    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }

    public function isCorrect($reponsesUtilisateur)
    {
        if ($this->true_or_false) {
            return $reponsesUtilisateur === $this->reponse_correcte;
        } elseif ($this->one_answer) {
            return $this->reponses->where('juste', true)->pluck('id')->contains($reponsesUtilisateur);
        } elseif ($this->multiple_answer) {
            $reponsesCorrectes = $this->reponses->where('juste', true)->pluck('id')->toArray();
            $reponsesDonnees = array_keys($reponsesUtilisateur, true);
            return count($reponsesCorrectes) === count($reponsesDonnees) && empty(array_diff($reponsesCorrectes, $reponsesDonnees));
        }
        return false;
    }



}
