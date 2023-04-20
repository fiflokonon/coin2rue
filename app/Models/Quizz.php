<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'temps_limite',
        'pass_mark',
        'randomize_questions',
        'randomize_answers',
        'image_link',
        'user_id',
        'lecon_id',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function lecon()
    {
        return $this->belongsTo(Lecon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
