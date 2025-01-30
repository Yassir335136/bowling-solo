<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::factory()->count(5)->create();
    }
}
