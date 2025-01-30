<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Spel extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($PersoonId, $ReservationId): void
    {
        \App\Models\Spel::factory()
            ->count(20)
            ->create(['PersoonId' => $PersoonId, 'ReservationId' => $ReservationId]);
    }
}
