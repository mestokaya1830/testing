<?php

namespace Tests\Feature;
use Tests\TestCase;

class FindTest extends TestCase
{
    //get with id------------------------------------------------------
    public function test_products_id()
    {
        $response = $this->get('/api/products/1');
        $response->assertStatus(200);
    }
}
