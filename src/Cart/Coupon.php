<?php

namespace Drix\Cart;


class Coupon
{
    protected $total;
    protected $code;

    public function getTotal($cartTotal)
    {
        return ($cartTotal - $this->total);
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

}