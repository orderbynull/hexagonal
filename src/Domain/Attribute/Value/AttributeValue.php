<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Attribute\Value;

/**
 * Class AttributeValue
 * @package Hexagonal\Domain\Attribute\Value
 */
class AttributeValue
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * AttributeValue constructor.
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }
}