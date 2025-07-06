<?php
namespace Tests\Unit;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    //create the user if its not exists
    public function test_register_user()
    {
        $res = $this->post('/api/register', [
            'name' => 'test3',
            'email' => 'test3@outlook.com',
            'password' => '9090',
            'password_confirmation' => '9090'
        ]);
        // $res->assertStatus(201);
        $res->assertCreated();//the same
    }
}
