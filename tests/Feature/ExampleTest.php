<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_getRequirements()
    {
        $response = $this->get('api/requirements/');

        $response->assertStatus(200);
    }
    public function test_getItems()
    {
        $response = $this->get('api/items/');

        $response->assertStatus(200);
    }
}
