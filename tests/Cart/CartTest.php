<?php

namespace Drix\Cart\Tests;


use Drix\Cart\Cart;
use Drix\Cart\Coupon;
use Drix\Cart\CouponPercentage;
use Drix\Cart\ProductX;

class CartTest extends \PHPUnit_Framework_TestCase
{
    public function test_check_cart_total_when_add_a_product()
    {
        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn('Product X');

        $cart = new Cart();

        $cart->addProduct($productX);
        $this->assertEquals(15, $cart->getTotal());

        $cart->addProduct($productX);
        $this->assertEquals(30, $cart->getTotal());

    }

    public function test_if_cart_items_are_being_returned()
    {
        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn('Product X');

        $cart = new Cart();
        $cart->addProduct($productX);
        $items = $cart->getItems();

        $itemsExpected = array(
            0 => array(
                'name' => 'Product X',
                'price' => 15
            )
        );

        $this->assertEquals($itemsExpected, $items);
    }

    public function test_apply_coupon_and_check_if_its_returning_the_correct_total()
    {
        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn('Product X');

        $coupon = $this->getMockBuilder(Coupon::class)->getMock();
        $coupon->method('getTotal')->willReturn(5);

        $cart = new Cart();
        $cart->addProduct($productX);
        $cart->applyCoupon($coupon);
        $total = $cart->getTotal();
        
       $this->assertEquals(5, $total);
    }

    public function test_apply_coupon_with_type_percentage_and_check_if_its_returning_the_correct_total()
    {
        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn('Product X');

        $coupon = $this->getMockBuilder(CouponPercentage::class)->getMock();
        $coupon->method('getTotal')->willReturn(13.5);

        $cart = new Cart();
        $cart->addProduct($productX);
        $cart->applyCoupon($coupon);
        $total = $cart->getTotal();

        $this->assertEquals(13.5, $total);
    }
}
