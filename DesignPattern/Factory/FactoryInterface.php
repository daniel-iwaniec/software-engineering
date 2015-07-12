<?php

namespace DanielIwaniec\SoftwareEngineering\DesignPattern\Factory;

/**
 * Interface for factories.
 * Not really required by factory pattern.
 * It is used to adhere to interface segregation principle.
 */
interface FactoryInterface
{
    /**
     * Creates new product according to a specified type.
     * Returns null when is unable to create product,
     * although it could throw exception alternatively.
     *
     * @param string $type
     * @return ProductInterface|null
     */
    public function createProduct($type);
}
