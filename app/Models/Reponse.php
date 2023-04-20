<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;
    protected $table = 'reponses';
    protected $fillable = [
        'question_id',
        'reponse',
        'juste',
        'statut'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

