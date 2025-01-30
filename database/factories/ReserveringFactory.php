<?php

namespace Database\Factories;

use App\Models\Reservering;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReserveringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Reservering::class;

    public function definition(): array
    {
        $startTime = $this->faker->dateTimeBetween('08:00:00', '20:00:00');
        $hours = $this->faker->numberBetween(1, 4);
        $endTime = (clone $startTime)->modify("+$hours hours");

        return [
            'OpeningstijdId' => $this->faker->numberBetween(1, 10),
            'TariefId' => $this->faker->numberBetween(1, 10),
            'BaanId' => $this->faker->numberBetween(1, 10),
            'PakketOptieId' => $this->faker->numberBetween(1, 10),
            'ReserveringStatusId' => $this->faker->numberBetween(1, 10),
            'Reserveringsnummer' => $this->faker->unique()->numerify('RES#####'),
            'Datum' => '2022-12-27',
            'AantalUren' => $hours,
            'BeginTijd' => $startTime->format('H:i'),
            'EindTijd' => $endTime->format('H:i'),
            'AantalVolwassen' => $this->faker->numberBetween(1, 5),
            'AantalKinderen' => $this->faker->numberBetween(0, 5),
        ];
    }
}
