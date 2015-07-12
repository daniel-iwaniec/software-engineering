<?php

namespace DanielIwaniec\SoftwareEngineering\DesignPattern\Factory;
/**
 * Vanilla factory implementation.
 */
class Factory implements FactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createProduct($type)
    {
        if ($type == 'A') {
            return new ProductA;
        } elseif ($type == 'B') {
            return new ProductB;
        } else {
            return null;
        }
    }
}
