<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = [
        'nombre',
        'anio_nacimiento',
        'edad'
    ];
    
    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
