<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaGenreSeeder extends Seeder
{
    public function run(): void
    {
        // Media 1: Nuestro Planeta
        Media::find(1)->genres()->sync([7, 1]); // Documental, Acción

        // Media 2: Cosmos
        Media::find(2)->genres()->sync([7, 3]); // Documental, Ciencia ficción

        // Media 3: Inception
        Media::find(3)->genres()->sync([1, 3, 10]); // Acción, Ciencia ficción, Fantasía

        // Media 4: Jurassic Park
        Media::find(4)->genres()->sync([1, 2, 3]); // Acción, Aventura, Ciencia ficción

        // Media 5: Pulp Fiction
        Media::find(5)->genres()->sync([4, 1]); // Drama, Acción

        // Media 6: Avatar
        Media::find(6)->genres()->sync([2, 3, 10]); // Aventura, Ciencia ficción, Fantasía

        // Media 7: Stranger Things
        Media::find(7)->genres()->sync([3, 6, 10]); // Ciencia ficción • Terror • Fantasía

        // Media 8: The Mandalorian
        Media::find(8)->genres()->sync([1, 2, 10]); // Acción • Aventura • Fantasía

        // Media 9: Breaking Bad
        Media::find(9)->genres()->sync([4, 1]); // Drama • Acción

        // Media 10: One Piece
        Media::find(10)->genres()->sync([2, 1, 8]); // Aventura • Acción • Animación
    }
}
