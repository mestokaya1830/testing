<?php

namespace Tests\Feature;
use Tests\TestCase;
class DbTest extends TestCase
{
    public function test_db()
    {
        $this->assertDatabaseHas('users',['name' => 'admin']);//admin has
        // $this->assertDatabaseMissing('users',['name' => 'test2']);//test has
    }
}
