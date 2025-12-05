<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    public function run(): void
    {
        Director::insert([
            [
                'nombre' => 'Christopher Nolan',
                'anio_nacimiento' => 1970,
                'edad' => 54
            ],
            [
                'nombre' => 'Steven Spielberg',
                'anio_nacimiento' => 1946,
                'edad' => 78
            ],
            [
                'nombre' => 'Quentin Tarantino',
                'anio_nacimiento' => 1963,
                'edad' => 61
            ],
            [
                'nombre' => 'Patty Jenkins',
                'anio_nacimiento' => 1971,
                'edad' => 53
            ],
            [
                'nombre' => 'James Cameron',
                'anio_nacimiento' => 1954,
                'edad' => 70
            ],
            [
                'nombre' => 'Hayao Miyazaki',
                'anio_nacimiento' => 1941,
                'edad' => 83
            ],
            [
                'nombre' => 'Ridley Scott',
                'anio_nacimiento' => 1937,
                'edad' => 87
            ],
            [
                'nombre' => 'Denis Villeneuve',
                'anio_nacimiento' => 1967,
                'edad' => 57
            ],
            [
                'nombre' => 'Tim Burton',
                'anio_nacimiento' => 1958,
                'edad' => 66
            ],
            [
                'nombre' => 'Greta Gerwig',
                'anio_nacimiento' => 1983,
                'edad' => 41
            ]
        ]);
    }
}
