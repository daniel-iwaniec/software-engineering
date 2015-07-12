<?php

namespace DanielIwaniec\SoftwareEngineering\DesignPattern\Factory;

/**
 * The second example of implementation of the product's interface.
 */
class ProductB implements ProductInterface
{
    /** @var string */
    protected $state;

    /**
     * @inheritdoc
     */
    public function setState($state)
    {
        $this->state = $state . ' (B)';
    }

    /**
     * @inheritdoc
     */
    public function getState()
    {
        return $this->state;
    }
}
