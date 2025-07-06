<?php

namespace Tests\Feature;
use Tests\TestCase;

class AddTest extends TestCase
{
    //post create new prodcut---------------------------------------------------
    public function test_create_product()
    {
        $res = $this->post('/api/products/add', [
            'name' => 'Unix',
            'slug' => 'unix',
            'price' => '55.99'
        ]);
        // $res->assertStatus(201);
        $res->assertCreated();//the same
    }
}
