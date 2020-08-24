<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAboutPageRouteReturnsOk()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
