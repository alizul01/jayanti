<?php

namespace Tests\Feature;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_guest_can_access_login_page(): void
    {
        $response = $this->get(route('login'));

        $response->assertStatus(Response::HTTP_OK);
        $response->assertViewIs('auth.login');
    }

    public function test_guest_can_login(): void
    {
        $user = User::factory()->create();
        $credentials = ['email' => $user->email, 'password' => 'password'];

        $response = $this->post(route('login'), $credentials);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_guest_cannot_access_dashboard(): void
    {
        $response = $this->get(route('dashboard'));

        $response->assertRedirect(route('login'));
    }

    public function test_authenticated_user_can_access_dashboard(): void
    {
        $user = User::factory()->create();
        Auth::login($user);

        $response = $this->get(route('dashboard'));

        $response->assertStatus(Response::HTTP_OK);
        $response->assertViewIs('dashboard.index');
    }

    public function test_authenticated_user_can_logout(): void
    {
        $user = User::factory()->create();
        Auth::login($user);

        $response = $this->post(route('logout'));

        $response->assertRedirect('/');
        $this->assertGuest();
    }

    public function test_admin_middleware_denies_non_admin_users(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('ranks.create'));

        $response->assertStatus(Response::HTTP_FORBIDDEN);
    }

    public function test_admin_middleware_allows_admin_users(): void
    {
        $user = User::factory()->admin()->create();
        $response = $this->actingAs($user)->get(route('ranks.create'));
        $response->assertStatus(Response::HTTP_OK);
    }
}
