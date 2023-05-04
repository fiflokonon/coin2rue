<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $fillable = [
        'titre',
        'description',
        'image_link',
        'statut',
        'formation_id',
        'created_by',
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function lecons()
    {
        return $this->hasMany(Lecon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function progressions()
    {
        return $this->hasMany(Progression::class, 'progressionable_id');
    }

    public function quiz()
    {
        return $this->hasMany(Quiz::class, 'quizable_id');
    }
}
