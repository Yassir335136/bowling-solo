<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Row>
 */
class RowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'name' => $this->faker->name(),
            'HasFences' => $this->faker->boolean(),
            'IsVip' => $this->faker->boolean(),
            'IsActive' => $this->faker->boolean(),
            'comment' => $this->faker->text(),
        ];
    }
}
