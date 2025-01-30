<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Uitslag extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($SpelId): void
    {
        \App\Models\Uitslag::factory()
            ->count(5)
            ->create(['SpelId' => $SpelId]);
    }
}
