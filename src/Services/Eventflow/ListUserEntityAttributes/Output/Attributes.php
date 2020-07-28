<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

use SplFixedArray;
use Traversable;

/**
 * Class Attributes
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
class Attributes implements \IteratorAggregate
{
    /**
     * @var int
     */
    private int $index = 0;

    /**
     * @var SplFixedArray
     */
    private SplFixedArray $attributes;

    /**
     * Attributes constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->attributes = new SplFixedArray($size);
    }

    /**
     * @param Attribute $attribute
     */
    public function add(Attribute $attribute): void
    {
        $this->attributes[$this->index++] = $attribute;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->attributes->toArray();
    }

    /**
     * @return Traversable|void
     */
    public function getIterator()
    {
        return $this->attributes;
    }
}