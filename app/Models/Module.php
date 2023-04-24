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
        'image',
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
}
