<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraphe extends Model
{
    use HasFactory;
    protected $table = 'paragraphes';
    protected $fillable = [
        'contenu',
        'ordre',
        'media_link',
        'lecon_id',
        'user_id',
        'statut'
    ];

    public function lecon()
    {
        return $this->belongsTo(Lecon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
