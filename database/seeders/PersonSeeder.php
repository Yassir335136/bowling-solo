<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personData = [
            [
                'firstName' => 'Mazin',
                'namepart' => null,
                'lastName' => 'Jamil',
                'callingName' => 'Mazin',
                'IsAdult' => true,
                'typePersoonId' => 1
            ],
            [
                'firstName' => 'Arjan',
                'namepart' => 'de',
                'lastName' => 'Ruijter',
                'callingName' => 'Arjan',
                'IsAdult' => true,
                'typePersoonId' => 1
            ],
            [
                'firstName' => 'Hans',
                'namepart' => null,
                'lastName' => 'Odijk',
                'callingName' => 'Hans',
                'IsAdult' => true,
                'typePersoonId' => 1
            ],
            [
                'firstName' => 'Dennis',
                'namepart' => 'van',
                'lastName' => 'Wakeren',
                'callingName' => 'Dennis',
                'IsAdult' => true,
                'typePersoonId' => 1
            ],
            [
                'firstName' => 'Wilco',
                'namepart' => 'Van de',
                'lastName' => 'Grift',
                'callingName' => 'Wilco',
                'IsAdult' => true,
                'typePersoonId' => 2
            ],
            [
                'firstName' => 'Tom',
                'namepart' => null,
                'lastName' => 'Sanders',
                'callingName' => 'Tom',
                'IsAdult' => false,
                'typePersoonId' => 3
            ],
            [
                'firstName' => 'Andrew',
                'namepart' => null,
                'lastName' => 'Sanders',
                'callingName' => 'Andrew',
                'IsAdult' => false,
                'typePersoonId' => 3
            ],
            [
                'firstName' => 'Julian',
                'namepart' => null,
                'lastName' => 'Kaldenheuvel',
                'callingName' => 'Julian',
                'IsAdult' => true,
                'typePersoonId' => 1
            ],
        ];

        Person::create($personData[0]);
        Person::create($personData[1]);
        Person::create($personData[2]);
        Person::create($personData[3]);

        Person::create($personData[4]);
        Person::create($personData[5]);
        Person::create($personData[6]);
        Person::create($personData[7]);
    }
}
