<?php

namespace Drix\Cart\Tests;

use Drix\Cart\CouponPercentage;

class CouponPercentageTest extends \PHPUnit_Framework_TestCase
{
    public function test_check_if_coupon_is_returning_the_correct_applied_discount()
    {
        $coupon = new CouponPercentage();
        $coupon->setTotal(20);

        $totalCart = 200;

        $this->assertEquals(160, $coupon->getTotal($totalCart));
    }
}