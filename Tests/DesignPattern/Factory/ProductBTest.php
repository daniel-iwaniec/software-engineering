<?php

namespace DanielIwaniec\SoftwareEngineering\Tests\DesignPattern\Factory;

use DanielIwaniec\SoftwareEngineering\DesignPattern\Factory\ProductB;

/**
 * Tests the second example of implementation of the product's interface.
 */
class ProductBTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests mutation of product's state.
     */
    public function testState()
    {
        $productA = new ProductB();
        $productA->setState('test');

        $this->assertEquals('test (B)', $productA->getState());
    }
}
