<?php

namespace Database\Factories;

use App\Models\Rows;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rowId' => 1,
            'userId' => User::factory()->create(),
            'startDateTime' => now(),
            'endDateTime' => fake()->dateTimeBetween(now(), "1 year"),
            'adultCount' => fake()->numberBetween(1, 8),
            'childrenCount' => 0,
        ];
    }
}
