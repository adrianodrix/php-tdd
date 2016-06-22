<?php

namespace Drix\Cart\Tests;


use Drix\Cart\Product;
use Drix\Cart\ProductX;

class ProductXTest extends \PHPUnit_Framework_TestCase
{
    public function test_check_if_productX_is_implementing_product_interface()
    {
        $productX = new ProductX();
        $this->assertInstanceOf(Product::class, $productX);
    }

    public function test_check_set_price_and_default_price_for_productX()
    {
        $productX = new ProductX();
        $this->assertEquals(0, $productX->getPrice());

        $productX->setPrice(10);
        $this->assertEquals(10, $productX->getPrice());
    }
}
