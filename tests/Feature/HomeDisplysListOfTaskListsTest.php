<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeDisplysListOfTaskListsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function itDisplaysAListOfTaskLists()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Task Lists');
    }
}
