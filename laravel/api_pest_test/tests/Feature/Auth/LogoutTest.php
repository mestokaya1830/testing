<?php

it('has logout page', function () {
    $user = [
        'email' => 'admin@outlook.com',
        'password' => '9090'
    ];

    Auth::attempt($user);
    $token = Auth::user()->createToken('nfce_client')->accessToken;
    $headers = ['Authorization' => "Bearer $token"];
    $this->post('api/logout', [], $headers)
        ->assertStatus(200);
});
