<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'quizz_id',
        'true_or_false',
        'mutiple_answers',
        'one_answer',
        'statut'
    ];


    public function quiz()
    {
        return $this->belongsTo(Quizz::class);
    }

    // Une question a plusieurs réponses
    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
}
