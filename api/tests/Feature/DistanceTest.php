<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DistanceTest extends TestCase
{

    public function test_is_working(): void
    {
        $response = $this->get('/api/test');
        $response->assertStatus(200);
        $response->assertSee(__(key: 'Working!'));
    }

    public function test_distance_in_km_request(): void
    {
        $response = $this->postJson('/api/distanceInKm', ['longitude' => 123, 'latitude' => 456]);
        $response->assertStatus(200);
        $response->assertSee(__(key: 'Here we will calculate the distance between the points :)'));
    }
}
