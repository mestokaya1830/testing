<?php

namespace Tests\Feature;

use Tests\TestCase;

class DeleteTest extends TestCase
{
     //delete prodcut---------------------------------------------------
     public function test_delete_product()
     {
         $this->delete('/api/products/delete/5')->assertOk();
         $this->assertDatabaseMissing('products',['id' => '5']);
     }
}
