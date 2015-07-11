<?php

namespace DanielIwaniec\SoftwareEngineering\Tests\DesignPattern;

use DanielIwaniec\SoftwareEngineering\DesignPattern\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSingleton()
    {
        $singleton = Singleton::getInstance();

        $this->assertEquals('singleton', $singleton->doSomething());
    }
}
