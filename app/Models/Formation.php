<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'formations';
    protected $fillable = [
        'titre',
        'description',
        'prix',
        'duree',
        'image',
        'user_id',
        'statut_admin',
        'statut',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function progressions()
    {
        return $this->hasMany(Progression::class, 'progressionable_id');
    }
}
