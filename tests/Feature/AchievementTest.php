<?php

namespace Tests\Feature;

use App\Models\Achievement;
use App\Models\Level;
use App\Models\Rank;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class AchievementTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_store_achievement(): void
    {
        $user = User::factory()->create();
        $level = Level::factory()->create();
        $rank = Rank::factory()->create();
        $data = [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'level_id' => $level->id,
            'rank_id' => $rank->id,
            'user_id' => $user->id,
            'type' => $this->faker->words(2, true),
            'location' => $this->faker->address,
            'organizer' => $this->faker->company,
            'start_date' => $this->faker->date('Y-m-d', 'now'),
            'end_date' => $this->faker->date('Y-m-d', 'now'),
            'documentation_file' => UploadedFile::fake()->create('documentation.pdf', 500),
            'certificate_file' => UploadedFile::fake()->create('certificate.pdf', 500),
            'results_url' => $this->faker->url,
        ];

        $this->actingAs($user)
            ->post(route('achievements.store'), $data)
            ->assertRedirect(route('achievements.index'));

        $achievement = Achievement::first();
        $this->assertEquals($data['name'], $achievement->name);
        $this->assertEquals($data['description'], $achievement->description);
        $this->assertEquals($data['level_id'], $achievement->level_id);
        $this->assertEquals($data['rank_id'], $achievement->rank_id);
        $this->assertEquals($data['type'], $achievement->type);
        $this->assertEquals($data['location'], $achievement->location);
        $this->assertEquals($data['organizer'], $achievement->organizer);
        $this->assertNotNull($achievement->documentation_file);
        $this->assertNotNull($achievement->certificate_file);
        $this->assertEquals($data['results_url'], $achievement->results_url);
    }
}
