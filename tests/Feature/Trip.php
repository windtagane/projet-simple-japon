<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Trip extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $trip = new Trip(['theme'=> 'Manga']);
        $this->assertEquals('Manga'), $trip->theme);


       // $response = $this->get('/');

        //$response->assertStatus(200);
    }
}
