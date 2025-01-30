<?php

namespace Database\Factories;

use App\Models\Spel;
use App\Models\Uitslag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Uitslag>
 */
class UitslagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Uitslag::class;
    public function definition(): array
    {
        return [
            'AantalPunten' => $this->faker->numberBetween(0, 300),
        ];
    }
}
