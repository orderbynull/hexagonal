<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * Trait PropertyAccessTrait
 * @package Hexagonal\Domain\Eventflow\Attribute
 */
trait PropertyAccessTrait
{
    /**
     * @param array $properties
     *
     * @return $this
     */
    public function fromArray(array $properties)
    {
        $accessor = PropertyAccess::createPropertyAccessor();

        foreach ($properties as $property => $value) {
            if ($accessor->isWritable($this, $property)) {
                $accessor->setValue($this, $property, $value);
            }
        }

        return $this;
    }
}