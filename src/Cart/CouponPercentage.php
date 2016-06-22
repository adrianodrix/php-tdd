<?php

namespace Drix\Cart;


class CouponPercentage extends Coupon
{
    public function getTotal($cartTotal)
    {
        return ($cartTotal - ($cartTotal * ($this->total / 100)));
    }
}