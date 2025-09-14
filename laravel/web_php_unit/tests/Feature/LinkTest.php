<?php

namespace Tests\Feature;

use Tests\TestCase;

class LinkTest extends TestCase
{
    public function test_example()
    {
        $res = $this->get('/');
        $res->assertSee('https://gaziantepbilisim.com.tr');
        // $res->assertSee(['Documentation','Laravel']);
    }
}
