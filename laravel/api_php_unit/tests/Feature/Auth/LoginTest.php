<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_login()
    {
        $res = $this->post('api/login',  [
            'email' => 'admin@outlook.com',
            'password' => '9090'
        ])->assertOk();
        $this->assertArrayHasKey('token',$res->json());
    }
}