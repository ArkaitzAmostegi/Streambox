<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'nombre'
    ]
    //Relación con Media
    public function category()
    {
        return $this->belongsTo(Media::class, 'idMedia');
    }
}
