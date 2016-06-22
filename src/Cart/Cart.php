<?php

namespace Drix\Cart;

class Cart
{
    private $total;
    private $items = array();

    public function addProduct(Product $product)
    {
        $newItem =  array(
            'name' => $product->getName(),
            'price' => $product->getPrice()
        );

        array_push($this->items, $newItem);

        $this->total += $product->getPrice();
    }
    
    public function getTotal()
    {
        return $this->total;
    }

    public function getItems(){
        return $this->items;
    }

    public function applyCoupon(Coupon $coupon)
    {
        $this->total = $coupon->getTotal($this->getTotal());
        return $this;
    }
}