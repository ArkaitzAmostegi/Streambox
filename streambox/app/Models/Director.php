<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = [
        'nombre',
        'anio-nacimiento',
        'edad'
    ]
}
