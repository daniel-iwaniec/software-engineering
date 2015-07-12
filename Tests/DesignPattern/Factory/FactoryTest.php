<?php

namespace DanielIwaniec\SoftwareEngineering\Tests\DesignPattern\Factory;

use DanielIwaniec\SoftwareEngineering\DesignPattern\Factory\Factory;

/**
 * Tests factory correctness.
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests return value when product type is A.
     */
    public function testKnownProductA()
    {
        $factory = new Factory();
        $productA = $factory->createProduct('A');

        $this->assertInstanceOf('DanielIwaniec\SoftwareEngineering\DesignPattern\Factory\ProductInterface', $productA);
        $this->assertInstanceOf('DanielIwaniec\SoftwareEngineering\DesignPattern\Factory\ProductA', $productA);
    }

    /**
     * Tests return value when product type is B.
     */
    public function testKnownProductB()
    {
        $factory = new Factory();
        $productB = $factory->createProduct('B');

        $this->assertInstanceOf('DanielIwaniec\SoftwareEngineering\DesignPattern\Factory\ProductInterface', $productB);
        $this->assertInstanceOf('DanielIwaniec\SoftwareEngineering\DesignPattern\Factory\ProductB', $productB);
    }

    /**
     * Tests return value when product type is unknown.
     */
    public function testUnknownProduct()
    {
        $factory = new Factory();
        $product = $factory->createProduct('C');

        $this->assertNull($product);
    }
}
