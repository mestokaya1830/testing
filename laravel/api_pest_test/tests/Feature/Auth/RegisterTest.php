<?php

use App\Models\User;

it('has register page', function () {
    $response = $this->post('/api/register', [
        'name' => 'test3',
        'email' => 'test3@outlook.com',
        'password' => '9090',
        'password_confirmation' => '9090'
    ]);
    // $response->assertStatus(201);
    $response->assertCreated();//the same
});
