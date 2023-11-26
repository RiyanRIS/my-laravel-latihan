<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutingTest extends TestCase
{
    function testGet() {
        $this->get('/ryn')
        ->assertStatus(200)
        ->assertSeeText('Halo');
    }
}
