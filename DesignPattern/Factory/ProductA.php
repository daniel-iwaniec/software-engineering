<?php

namespace DanielIwaniec\SoftwareEngineering\DesignPattern\Factory;

/**
 * The first example of implementation of the product's interface.
 */
class ProductA implements ProductInterface
{
    /** @var string */
    protected $state;

    /**
     * @inheritdoc
     */
    public function setState($state)
    {
        $this->state = $state . ' (A)';
    }

    /**
     * @inheritdoc
     */
    public function getState()
    {
        return $this->state;
    }
}
