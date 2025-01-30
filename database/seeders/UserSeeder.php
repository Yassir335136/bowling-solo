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
            'first_name' => 'Donny',
            'last_name' => 'Walter',
            'email' => 'donnywalter@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'Owner'
        ]);

        // Create 5 more random users
        User::factory()->count(5)->create();
    }
}
