<?php

namespace Database\Factories;

use App\Models\Alley;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserving>
 */
class ReservingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "personId" => Person::inRandomOrder()->first(),
            "openingtimeID" => 1,
            "tariefId" => 1,
            "alleyId" => fake()->numberBetween(1, 5),
            "packOptionsId" => 1,
            "reservationStatusId" => 1,

            "reservingsNumber" => 43567 + fake()->numberBetween(0, 500),
            "date" => fake()->dateTimeBetween('2025-01-01', '+2 years'),
            "startTime" => fake()->time("H:i"),
            "endTime" => fake()->time("H:i"),
            "totalHours" => fake()->numberBetween(0, 24),
            "totalAdults" => fake()->numberBetween(0, 8),
            "totalChildren" => fake()->numberBetween(0, 4)
        ];
    }
}
