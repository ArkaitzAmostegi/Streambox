<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'duracion',
        'anio',
        'tipo'
    ]
    //Relación con categoría
    public function category()
    {
        return $this->belongsTo(Category::class, 'idCategory');
    }
}
