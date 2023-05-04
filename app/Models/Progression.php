<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progression extends Model
{
    protected $fillable = [
        'user_id',
        'progressionable_id',
        'progressionable_type',
        'pourcentage'
    ];

    public function progressionable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


