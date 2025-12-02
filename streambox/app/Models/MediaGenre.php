<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaGenre extends Model
{
    // Indica que este modelo NO usa timestamps porque la tabla pivot no los tiene
    public $timestamps = false;

    // Relación N:1 → cada fila pivot pertenece a un producto
    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    // Relación N:1 → cada fila pivot pertenece a un proveedor
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
