<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Http\Controllers\ProductsController;
class SumTest extends TestCase
{
    public function test_sum()
    {
        $rt = (new ProductsController)->sum();
        $this->assertEquals($rt, 50);
    }
}
