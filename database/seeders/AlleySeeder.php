<?php

namespace Database\Seeders;

use App\Models\Alley;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlleySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alley::factory()
            ->sequence(fn($seq) => ['Number' => $seq->index + 1 + sizeof(Alley::all())])
            ->count(6)
            ->create([]);

        Alley::factory()
            ->sequence(fn($seq) => ['Number' => $seq->index + 1 + sizeof(Alley::all())])
            ->count(2)
            ->create(["HasFences" => true]);
    }
}
