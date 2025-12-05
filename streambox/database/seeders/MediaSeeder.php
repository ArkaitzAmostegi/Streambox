<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
           Media::insert([
            [
                'titulo' => 'Nuestro Planeta',
                'descripcion' => 'Documental sobre la vida salvaje.',
                'anio' => 2019,
                'duracion' => 50,
                'category_id' => 1,   // documental
                'director_id' => 1
            ],
            [
                'titulo' => 'Cosmos',
                'descripcion' => 'Serie documental sobre el universo.',
                'anio' => 2014,
                'duracion' => 45,
                'category_id' => 1,   // documental
                'director_id' => 6
            ],
            [
                'titulo' => 'Inception',
                'descripcion' => 'Ciencia ficción sobre sueños compartidos.',
                'anio' => 2010,
                'duracion' => 148,
                'category_id' => 2,   // película
                'director_id' => 1
            ],
            [
                'titulo' => 'Jurassic Park',
                'descripcion' => 'Parque temático con dinosaurios clonados.',
                'anio' => 1993,
                'duracion' => 127,
                'category_id' => 2,
                'director_id' => 2
            ],
            [
                'titulo' => 'Pulp Fiction',
                'descripcion' => 'Historias entrelazadas de crimen y humor negro.',
                'anio' => 1994,
                'duracion' => 154,
                'category_id' => 2,
                'director_id' => 3
            ],
            [
                'titulo' => 'Avatar',
                'descripcion' => 'Un marine se une a los Na\'vi en Pandora.',
                'anio' => 2009,
                'duracion' => 162,
                'category_id' => 2,
                'director_id' => 5
            ],
            [
                'titulo' => 'Stranger Things',
                'descripcion' => 'Aventura sobrenatural en los años 80.',
                'anio' => 2016,
                'duracion' => 50,
                'category_id' => 3,  // serie
                'director_id' => 8
            ],
            [
                'titulo' => 'The Mandalorian',
                'descripcion' => 'Un cazarrecompensas en el universo Star Wars.',
                'anio' => 2019,
                'duracion' => 40,
                'category_id' => 3,
                'director_id' => 7
            ],
            [
                'titulo' => 'Breaking Bad',
                'descripcion' => 'Profesor de química convertido en narcotraficante.',
                'anio' => 2008,
                'duracion' => 47,
                'category_id' => 3,
                'director_id' => 8
            ],
            [
                'titulo' => 'One Piece',
                'descripcion' => 'Un joven pirata busca el tesoro definitivo.',
                'anio' => 1999,
                'duracion' => 24,
                'category_id' => 3,
                'director_id' => 6
            ],
        ]);

    }
}
