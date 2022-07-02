<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGet()
    {
        $this->get('/rap')
            ->assertStatus(200)
            ->assertSeeText('Hello Richard');
    }

    public function testRedirect()
    {
        $this->get('/youtube')
            ->assertRedirect('/rap');
    }

    public function testFallback()
    {
        $this->get('/tidakada')
            ->assertSeeText('404 by Richard Alvin');
    }
}
