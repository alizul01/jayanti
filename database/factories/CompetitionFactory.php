<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => $this->faker->name,
          'description' => $this->faker->text,
          'type' => $this->faker->jobTitle,
          'city' => $this->faker->city,
          'province' => $this->faker->country,
          'organizer' => $this->faker->name,
          'start_date' => $this->faker->date,
          'end_date' => $this->faker->date
        ];
    }
}
