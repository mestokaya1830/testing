<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TitleTest extends TestCase
{
    public function test_example()
    {
        $res = $this->get('/');
        $title = 'Main Page';
        $res->assertSee($title);
    }
}
