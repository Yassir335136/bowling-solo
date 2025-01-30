<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('scores')->insert([
            ['reservations_id' => 1, 'name' => 'Agnes', 'score' => 310, 'isactive' => true, 'comment' => '', 'created_at' => now(), 'updated_at' => now()],
            ['reservations_id' => 2, 'name' => 'Frans', 'score' => 320, 'isactive' => true, 'comment' => '', 'created_at' => now(), 'updated_at' => now()],
            ['reservations_id' => 3, 'name' => 'Jeroen', 'score' => 330, 'isactive' => true, 'comment' => '', 'created_at' => now(), 'updated_at' => now()],
            ['reservations_id' => 4, 'name' => 'Kees', 'score' => 340, 'isactive' => true, 'comment' => '', 'created_at' => now(), 'updated_at' => now()],
            ['reservations_id' => 5, 'name' => 'Marieke', 'score' => 350, 'isactive' => true, 'comment' => '', 'created_at' => now(), 'updated_at' => now()],
            ['reservations_id' => 6, 'name' => 'Sjaak', 'score' => 360, 'isactive' => true, 'comment' => '', 'created_at' => now(), 'updated_at' => now()],
            ['reservations_id' => 7, 'name' => 'Willem', 'score' => 370, 'isactive' => true, 'comment' => '', 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
