<?php
use App\Http\Controllers\ProductsController;
test('sum', function () {
    $sum = (new ProductsController)->sum();
        $this->assertEquals($sum, 50);
        // expect($sum)->toBeGreaterThan(20);
        // expect($sum)->toBeGreaterThanOrEqual(21);
        // expect($sum)->toBeLessThan(3);
        // expect($sum)->toBeLessThanOrEqual(2);
});
