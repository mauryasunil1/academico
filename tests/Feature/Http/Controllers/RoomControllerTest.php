<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Calendar\RoomCalendarController
 */
class RoomControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('roomsCalendar'));

        $response->assertOk();
        $response->assertViewIs('calendars.overview');
        $response->assertViewHas('events');
        $response->assertViewHas('resources');
        $response->assertViewHas('unassigned_events');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $room = factory(\App\Models\Room::class)->create();

        $response = $this->get(route('roomCalendar', [$room]));

        $response->assertOk();
        $response->assertViewIs('calendars.simple');
        $response->assertViewHas('events');
        $response->assertViewHas('resource');

        // TODO: perform additional assertions
    }

    // test cases...
}
