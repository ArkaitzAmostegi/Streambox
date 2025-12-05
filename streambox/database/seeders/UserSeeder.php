<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Ash',
            'email' => 'ash@plaia.eus',
            'password' => Hash::make('Ash123'),
        ]);

        User::create([
            'name' => 'Akane',
            'email' => 'akane@plaia.eus',
            'password' => Hash::make('Akane123'),
        ]);
    }
}
