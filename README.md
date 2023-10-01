# API Laravel Distance Calculator
This is an Api Project to calculate the distance in kilometers between two points using latitude and longitude.

This project is ideal for anyone who wants to learn how to create a simple API in Laravel using best practices.

The project also emphasizes the use of unit tests for all end points.

# Example of test
```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DistanceTest extends TestCase
{
    public function test_distance_in_km_request(): void
    {
        $response = $this->postJson('/api/distanceInKm', ['longitude' => 123, 'latitude' => 456]);
        $response->assertStatus(200);
        $response->assertSee(__(key: 'success'));
    }
}
```
