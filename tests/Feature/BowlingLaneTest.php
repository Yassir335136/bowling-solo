<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BowlingLaneTest extends TestCase
{
    /**
     * Test if a unauthorized person can access an admin page
     */
    public function test_row_index_can_be_rendered_without_permission()
    {
        $response = $this->get('/rows');

        $response->assertStatus(401);
    }
}
