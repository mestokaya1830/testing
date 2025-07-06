<?php

it('has products/update page', function () {
    $response = $this->put('/api/products/update/4',[
        'name' => 'Linux',
        'slug' => 'linux',
        'price' => '66.88'
    ]);
    $response->assertOk();
    $this->assertDatabaseHas('products',['id' => '4']);
});
