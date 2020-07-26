<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class IntegerAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
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
