<?php

namespace Drix\Cart\Tests;


use Drix\Cart\Coupon;

class CouponTest extends \PHPUnit_Framework_TestCase
{
    public function test_check_if_coupon_is_returning_the_correct_applied_discount()
    {
        $coupon = new Coupon();
        $coupon->setTotal(15);

        $totalCart = 100;

        $this->assertEquals(85, $coupon->getTotal($totalCart));
    }
}
