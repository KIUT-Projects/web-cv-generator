<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user, 'auth')->get('/dashboard')->assertStatus(200);

        $this->get('/')->assertStatus(200);
    }
}
