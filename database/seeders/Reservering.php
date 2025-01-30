<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Reservering extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($PersoonId): void
    {
        \App\Models\Reservering::factory()
            ->count(10)
            ->create(['PersoonId' => $PersoonId]);
    }
}
