<?php

namespace Tests\Feature;
use Tests\TestCase;

class AllTest extends TestCase
{
    //get--------------------------------------------------------------
    public function test_all_products()
    {
        $response = $this->get('/api/products');
        $response->assertStatus(200);
        // $response->assertOk();//the same
    }
}
