<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nombre',
        'edad',
        'telefono'
    ]
    //Relación con usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
