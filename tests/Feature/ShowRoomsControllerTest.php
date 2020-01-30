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

    public function testRoomParameter()
    {
        $roomTypes = factory('App\RoomType', 3)->create();
        $rooms = factory('App\Room', 20)->create();
        $roomType = $roomTypes->random();

        $response = $this->get('/rooms/'.$roomType->id);

        $response->assertStatus(200)
            ->assertSeeText('Type')
            ->assertViewIs('rooms.index')
            ->assertViewHas('rooms');
    }
}
