<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowRoomsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/rooms');

        $response->assertStatus(200)
            ->assertSeeText('Type')
            ->assertViewIs('rooms.index')
            ->assertViewHas('rooms');
    }
}
