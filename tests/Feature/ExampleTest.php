<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 642f8cc91bec36fb7e37d9772e66be30943d6ffd
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
