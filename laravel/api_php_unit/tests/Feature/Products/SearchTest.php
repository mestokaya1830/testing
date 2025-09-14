<?php

namespace Tests\Feature;
use Tests\TestCase;

class SearchTest extends TestCase
{
    //get with search---------------------------------------------------
    public function test_products_search()
    {
        $response = $this->get('/api/products/search/linux');
        $response->assertStatus(200);
         // $response->assertOk();//the same
    }
}

