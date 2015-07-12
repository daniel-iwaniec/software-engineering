<?php

namespace DanielIwaniec\SoftwareEngineering\Tests\DesignPattern\Factory;

use DanielIwaniec\SoftwareEngineering\DesignPattern\Factory\ProductA;

/**
 * Tests the first example of implementation of the product's interface.
 */
class ProductATest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests mutation of product's state.
     */
    public function testState()
    {
        $productA = new ProductA();
        $productA->setState('test');

        $this->assertEquals('test (A)', $productA->getState());
    }
}
