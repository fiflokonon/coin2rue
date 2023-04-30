<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizes';
    protected $fillable = [
        'titre',
        'description',
        'pass_mark',
        'user_id',
        'quizable_id',
        'quizable_type',
        'statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quizable()
    {
        return $this->morphTo();
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}


