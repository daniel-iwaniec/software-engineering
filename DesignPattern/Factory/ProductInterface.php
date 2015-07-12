<?php

namespace DanielIwaniec\SoftwareEngineering\DesignPattern\Factory;

/**
 * The product's interface which is shared by objects created by a factory.
 * This is the most important part of factory pattern, because
 * it allows to easily extend application by adding next product's implementation.
 */
interface ProductInterface
{
    /**
     * Sets product's internal state.
     *
     * @param string $state
     */
    public function setState($state);

    /**
     * Gets product's internal state.
     *
     * @return string
     */
    public function getState();
}
