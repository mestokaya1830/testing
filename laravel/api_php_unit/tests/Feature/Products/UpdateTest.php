<?php

namespace Tests\Feature;

use Tests\TestCase;

class UpdateTest extends TestCase
{
     //update prodcut---------------------------------------------------
     public function test_update_product()
     {
         $response = $this->put('/api/products/update/2',[
             'name' => 'Mac',
             'slug' => 'mac',
             'price' => '99.88'
         ]);
         $response->assertOk();
         $this->assertDatabaseHas('products',['id' => '2']);
     }
}
