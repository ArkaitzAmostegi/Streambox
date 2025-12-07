<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nombre',
        'edad',
        'telefono',
        'email',
        'user_id'
    ];
    //Relación con usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
