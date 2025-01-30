<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Row;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ReserveringFactory;
use Database\Factories\SpelFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        $guest = User::firstOrCreate(
            [
                'email' => 'mazinjamil@gmail.com'
            ],
            [
                'first_name' => 'Mazin',
                'last_name' => 'Jamil',
                'email' => 'mazinjamil@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'User'
            ]
        );

        User::factory(5)->create()->each(function ($user) {

            for ($i = 0; $i < 5; $i++) {
                $reservering = \App\Models\Reservering::factory()->create([
                    'PersoonId' => $user->id,
                ]);

                $spel = \App\Models\Spel::factory()->create([
                    'PersoonId' => $user->id,
                    'ReserveringId' => $reservering->id,
                ]);

                \App\Models\Uitslag::factory()->create([
                    'SpelId' => $spel->id,
                ]);
            }
        });

        $reservering = \App\Models\Reservering::factory()->create([
            'PersoonId' => $guest->id,
        ]);

        $spel = \App\Models\Spel::factory()->create([
            'PersoonId' => $guest->id,
            'ReserveringId' => $reservering->id,
        ]);

        for ($i = 0; $i < 3; $i++) {
            \App\Models\Uitslag::factory()->create([
                'SpelId' => $spel->id,
            ]);
        }
    }
}
