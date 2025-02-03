<?php

namespace Database\Seeders;

use App\Models\Reservering;
use App\Models\Spel;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'PersoonId' => 1,
            'first_name' => 'Donny',
            'last_name' => 'Walter',
            'nickname' => 'Donny',
            'email' => 'donnywalter@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Owner'
        ]);
    }
}
