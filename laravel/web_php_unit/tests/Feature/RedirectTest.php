<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RedirectTest extends TestCase
{
    public function test_example()
    {
        //this test needs login page(on browser) dosnt work with api
        $res = $this->post('/login', [
            'email' => 'admin@outlook.com',
            'password' => '9090',
        ]);
        $res->assertRedirect('/home');
    }
}
