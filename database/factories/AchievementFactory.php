<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achievement>
 */
class AchievementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'level_id' => $this->faker->numberBetween(1, 5),
            'rank_id' => $this->faker->numberBetween(1, 7),
            'user_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name(),
            'type' => $this->faker->sentence(),
            'location' => $this->faker->city(),
            'organizer' => $this->faker->company(),
            'description' => $this->faker->text(),
            'documentation_file' => $this->faker->url(),
            'certificate_file' => $this->faker->url(),
            'results_url' => $this->faker->url(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
        ];
    }
}
