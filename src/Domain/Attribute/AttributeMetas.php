<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Attribute;

use Hexagonal\Services\Eventflow\ListUserEntityAttributeMetas\Output\AttributeMeta;
use SplFixedArray;
use Traversable;

/**
 * Class AttributeMetas
 * @package Hexagonal\Domain\Attribute
 */
class AttributeMetas implements \IteratorAggregate
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
     * @param AttributeMeta $attribute
     */
    public function add(AttributeMeta $attribute): void
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