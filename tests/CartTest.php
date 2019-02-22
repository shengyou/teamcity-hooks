<?php

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testShouldReturnEmptyWhenConstruct()
    {
        // Act
        $cart = new Cart();

        // Assert
        $this->assertEquals(0, $cart->amount());
    }
}