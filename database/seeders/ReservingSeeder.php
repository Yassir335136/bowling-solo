<?php

namespace Database\Seeders;

use App\Models\Reserving;
use App\Models\TypePersoon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservations = [
            [
                'personId' => 1,
                'openingtimeID' => 2,
                'tariefId' => 1,
                'alleyId' => 8,
                'packOptionsId' => 1,
                'reservationStatusId' => 1,
                'reservingsNumber' => 2022122000001,
                'date' => '2022-12-20',
                'startTime' => '15:00',
                'endTime' => '16:00',
                'totalHours' => 1,
                'totalAdults' => 4,
                'totalChildren' => 2
            ],
            [
                'personId' => 2,
                'openingtimeID' => 1,
                'tariefId' => 1,
                'alleyId' => 2,
                'packOptionsId' => 3,
                'reservationStatusId' => 1,
                'reservingsNumber' => 2022122000002,
                'date' => '2022-12-20',
                'startTime' => '17:00',
                'endTime' => '18:00',
                'totalHours' => 1,
                'totalAdults' => 4,
                'totalChildren' => 0
            ],
            [
                'personId' => 3,
                'openingtimeID' => 7,
                'tariefId' => 2,
                'alleyId' => 1,
                'packOptionsId' => 1,
                'reservationStatusId' => 1,
                'reservingsNumber' => 2022122400003,
                'date' => '2022-12-24',
                'startTime' => '16:00',
                'endTime' => '18:00',
                'totalHours' => 2,
                'totalAdults' => 4,
                'totalChildren' => 0
            ],
            [
                'personId' => 1,
                'openingtimeID' => 2,
                'tariefId' => 1,
                'alleyId' => 6,
                'packOptionsId' => 0,
                'reservationStatusId' => 1,
                'reservingsNumber' => 2022122700004,
                'date' => '2022-12-27',
                'startTime' => '17:00',
                'endTime' => '19:00',
                'totalHours' => 2,
                'totalAdults' => 2,
                'totalChildren' => 0
            ],
            [
                'personId' => 5,
                'openingtimeID' => 3,
                'tariefId' => 1,
                'alleyId' => 4,
                'packOptionsId' => 4,
                'reservationStatusId' => 1,
                'reservingsNumber' => 2022122800005,
                'date' => '2022-12-28',
                'startTime' => '14:00',
                'endTime' => '15:00',
                'totalHours' => 1,
                'totalAdults' => 3,
                'totalChildren' => 0
            ],
            [
                'personId' => 6,
                'openingtimeID' => 10,
                'tariefId' => 3,
                'alleyId' => 5,
                'packOptionsId' => 4,
                'reservationStatusId' => 1,
                'reservingsNumber' => 2022122800006,
                'date' => '2022-12-28',
                'startTime' => '19:00',
                'endTime' => '21:00',
                'totalHours' => 2,
                'totalAdults' => 2,
                'totalChildren' => 0
            ]
        ];
        //
        Reserving::create($reservations[0]);
        Reserving::create($reservations[1]);
        Reserving::create($reservations[2]);
        Reserving::create($reservations[3]);
        Reserving::create($reservations[4]);
    }
}
