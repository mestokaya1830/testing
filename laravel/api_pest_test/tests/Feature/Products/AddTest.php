<?php

it('has products/add page', function () {
    $response = $this->post('/api/products/add', [
        'name' => 'Unix',
        'slug' => 'unix',
        'price' => '55.99'
    ]);
    // $response->assertStatus(201);
    $response->assertCreated();//the same
});
