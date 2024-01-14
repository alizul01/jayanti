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
            'level_id' => $this->faker->numberBetween(1, 3),
            'rank_id' => $this->faker->numberBetween(1, 4),
            'user_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name(),
            'location' => $this->faker->city(),
            'organizer' => $this->faker->company(),
            'description' => $this->faker->text(),
            'documentation_file' => $this->faker->filePath(),
            'certificate_file' => $this->faker->filePath(),
            'poster_file' => $this->faker->filePath(),
            'idea_file' => $this->faker->filePath(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
        ];
    }
}
