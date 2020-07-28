<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class IntegerAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class IntegerAttribute extends Attribute
{
    /**
     * @var int|null
     */
    public ?int $max;

    /**
     * @var int|null
     */
    public ?int $min;

    /**
     * @var int
     */
    public int $default;

    /**
     * @var bool
     */
    public bool $unique;
}
