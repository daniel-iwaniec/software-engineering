<?php

namespace DanielIwaniec\SoftwareEngineering\DesignPattern\Singleton;

/**
 * Creational design pattern named singleton.
 * Most controversial pattern called by some an anti-pattern.
 */
final class Singleton
{
    /** @var null|Singleton */
    private static $instance = null;

    /** @var mixed */
    private $state = null;

    /**
     * Prevents explicit instantiation.
     */
    private function __construct()
    {
    }

    /**
     * Singleton magic.
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    /**
     * Sets singleton's internal state.
     *
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Gets singleton's internal state.
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}
