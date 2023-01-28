<?php

namespace Tests\Feature;
use Tests\TestCase;

class DeleteUserTest extends TestCase
{
    //delete--------------------------------------------------------------
    public function test_delete(){
        $this->delete('/api/users/delete/39')->assertOk();
        $this->assertDatabaseMissing('users',['id' => '39']);
    }
}
