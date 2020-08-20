<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function authenticated_users_can_access_dashboard()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/dashboard')->assertOk();
    }
}
