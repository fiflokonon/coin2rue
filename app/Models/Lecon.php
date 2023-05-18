<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecon extends Model
{
    use HasFactory;
    protected $table = 'lecons';
    protected $fillable = [
        'titre',
        'description',
        'contenu',
        'image_link',
        'module_id',
        'user_id',
        'lecon_parent_id',
        'statut'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function lecon_parent()
    {
        return $this->belongsTo(Lecon::class, 'lecon_parent_id');
    }

    public function sous_lecons()
    {
        return $this->hasMany(Lecon::class, 'lecon_parent_id');
    }

    public function pdfs()
    {
        return $this->hasMany(Pdf::class);
    }

    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

    public function paragraphes()
    {
        return $this->hasMany(Paragraphe::class);
    }

    public function progressions()
    {
        return $this->hasMany(Progression::class, 'progressionable_id');
    }
}
