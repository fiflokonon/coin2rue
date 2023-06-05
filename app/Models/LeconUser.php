<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeconUser extends Model
{
    use HasFactory;
    protected $table = 'lecon_users';
    protected $fillable = [
        'user_id',
        'lecon_id',
        'valide'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lecon()
    {
        return $this->belongsTo(Lecon::class);
    }
}
