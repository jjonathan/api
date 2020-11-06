<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocationTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function create_location_test()
    {
        $att = [
            'user_id' => $this->faker->randomDigit,
            'lat' => $this->faker->randomFloat(6),
            'lon' => $this->faker->randomFloat(6)
        ];

        $this->post('/api', $att)
            ->assertStatus(200)
            ->assertJsonFragment([
                'status' => 'ok'
            ]);
 
        $this->assertDatabaseHas('location', $att);

        $this->get('/api?user_id=' . $att['user_id'])
            ->assertStatus(200)
            ->assertJsonFragment([
                'status' => 'ok'
            ]);
    }

}