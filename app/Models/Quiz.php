<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizes';
    protected $fillable = [
        'titre',
        'description',
        'pass_mark',
        'user_id',
        'lecon_id',
        'module_id',
        'statut'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function lecon()
    {
        return $this->belongsTo(Lecon::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
