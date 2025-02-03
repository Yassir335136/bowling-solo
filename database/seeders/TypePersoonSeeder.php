<?php

namespace Database\Seeders;

use App\Models\TypePersoon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypePersoon::create(
            [
                "Name" => "klant",
                "IsActive" => true
            ]
        );
        TypePersoon::create([
            "Name" => "gast",
            "IsActive" => true
        ]);
        TypePersoon::create(
            [
                "Name" => "medeweker",
                "IsActive" => true
            ]
        );
    }
}
