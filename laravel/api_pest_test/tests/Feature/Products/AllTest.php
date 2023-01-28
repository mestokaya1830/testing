<?php

it('has products/all page', function () {
    $response = $this->get('/api/products');
    $response->assertStatus(200);
    // $response->assertOk();//the same
});
