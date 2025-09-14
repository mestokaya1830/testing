<?php

it('has delete page', function () {
    $response = $this->delete('/api/users/delete/5');
    $response->assertOk();
    $this->assertDatabaseMissing('users',['id' => '5']);
});
