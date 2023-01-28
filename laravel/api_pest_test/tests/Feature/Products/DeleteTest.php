<?php

it('has products/delete page', function () {
    $response = $this->delete('/api/products/delete/3');
    $response->assertOk();
    $this->assertDatabaseMissing('products',['id' => '3']);
});
