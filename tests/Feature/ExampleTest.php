<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The root path redirects to the home page.
     */
    public function test_the_root_path_redirects_to_home(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/home');
    }

    /**
     * The home page returns a successful response.
     */
    public function test_the_home_page_returns_a_successful_response(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
