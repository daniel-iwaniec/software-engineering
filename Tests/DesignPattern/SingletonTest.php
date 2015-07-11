<?php

namespace DanielIwaniec\SoftwareEngineering\Tests\DesignPattern;

use DanielIwaniec\SoftwareEngineering\DesignPattern\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests singleton pattern.
     */
    public function testSingleton()
    {
        $singleton = Singleton::getInstance();
        $singleton->setState(100);

        $anotherSingleton = Singleton::getInstance();

        $this->assertEquals(100, $anotherSingleton->getState());
    }
}
