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
        $this->call([
            UserSeeder::class,
            RowSeeder::class,
            ReservationSeeder::class,
            TypePersoonSeeder::class,
            PersonSeeder::class,
            AlleySeeder::class,
            ReservingSeeder::class,
            ScoresTableSeeder::class,
        ]);
    }
}
