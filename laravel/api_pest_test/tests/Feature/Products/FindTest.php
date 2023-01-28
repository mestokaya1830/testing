<?php

it('has products/find page', function () {
    $response = $this->get('/api/products/1');
    $response->assertStatus(200);
});
