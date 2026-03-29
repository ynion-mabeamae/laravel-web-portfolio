<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Profile;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        Profile::create([
            'name' => 'John Doe',
            'title' => 'Web Developer',
            'description' => 'I am a web developer.',
            'profile_image' => 'default.jpg',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
