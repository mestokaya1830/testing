<?php

it('has products/search page', function () {
    $response = $this->get('/api/products/search/linux');
    $response->assertStatus(200);
    // $response->assertOk();//the same
});
