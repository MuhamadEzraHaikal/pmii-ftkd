<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AuthRedirectTest extends TestCase
{
    public function test_authenticated_users_are_redirected_to_dashboard_from_login_page(): void
    {
        $user = User::factory()->make();

        $response = $this->actingAs($user)->get(route('login'));

        $response->assertRedirect(route('dashboard'));
    }

    public function test_login_posts_redirect_authenticated_users_to_dashboard(): void
    {
        $user = User::factory()->create([
            'email' => 'anggota@example.com',
            'password' => 'password',
        ]);

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);
    }
}
