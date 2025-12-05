<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::insert([
            [
                'nombre' => 'Ash',
                'edad' => 42,
                'telefono' => '333444555',
                'user_id' => 1
            ],
            [
                'nombre' => 'Akane',
                'edad' => 32,
                'telefono' => '555333444',
                'user_id' => 2
            ]
        ]);
    }
}
