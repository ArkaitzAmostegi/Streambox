<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'titulo',
        'descripcion',
        'duracion',
        'anio',
        'tipo',
        'director_id',
        'category_id'
    ];

    //Relación con director
    public function director()
    {
        return $this->belongsTo(Director::class);
    }
    //Relación con géneros(genres)
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'media_genres');
    }
}
