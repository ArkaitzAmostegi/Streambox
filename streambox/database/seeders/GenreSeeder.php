<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::insert([
            ['nombre' => 'Acción'],
            ['nombre' => 'Aventura'],
            ['nombre' => 'Ciencia ficción'],
            ['nombre' => 'Drama'],
            ['nombre' => 'Comedia'],
            ['nombre' => 'Terror'],
            ['nombre' => 'Documental'],
            ['nombre' => 'Animación'],
            ['nombre' => 'Romance'],
            ['nombre' => 'Fantasía'],
        ]);
    }
}
