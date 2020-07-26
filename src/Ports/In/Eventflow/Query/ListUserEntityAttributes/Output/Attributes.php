<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

use SplFixedArray;

/**
 * Class Attributes
 * @package Hexagonal\Domain\Eventflow\Attribute
 */
class Attributes
{
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
        $this->attributes[] = $attribute;
    }
}