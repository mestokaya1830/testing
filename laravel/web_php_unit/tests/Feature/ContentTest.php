<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContentTest extends TestCase
{
    public function test_example()
    {
        $res = $this->get('/');
        $res->assertSee(['Documentation','Laravel','Shop']);
    }
}
