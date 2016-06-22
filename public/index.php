<?php

use Drix\Cart\Cart;
use Drix\Cart\ProductX;

require_once "../vendor/autoload.php";

$productX = new ProductX();
$cart = new Cart();

$cart->addProduct($productX);

print_r($cart->getItems());