<?php

it('has login page', function () {
    $res = $this->post('api/login',  [
        'email' => 'admin@outlook.com',
        'password' => '9090'
    ])->assertOk();
    $this->assertArrayHasKey('token',$res->json());
});
