<?php

it('has products/db page', function () {
    $this->assertDatabaseHas('users',['name' => 'admin']);//admin has
    // $this->assertDatabaseMissing('users',['name' => 'test2']);//test has
});
