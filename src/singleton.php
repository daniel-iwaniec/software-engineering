<?php

namespace SoftwareEngineering\DesignPattern;

/**
 * Creational design pattern named singleton.
 * Most controversial pattern called by some an anti-pattern.
 */
class Singleton
{
    /** @var null|Singleton */
    private static $instance = null;

    /**
     * Singleton magic.
     *
     * @return null|Singleton
     */
    public static function getInstance()
    {
        return self::$instance ? self::$instance : new Singleton();
    }

    /**
     * Example public interface.
     *
     * @return string
     */
    public function doSomething()
    {
        return 'singleton';
    }
}
