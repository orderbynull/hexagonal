<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class DecimalAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
 */
final class DecimalAttribute extends Attribute
{
    /**
     * @var float|null
     */
    protected float $min;

    /**
     * @var float|null
     */
    protected float $max;

    /**
     * @var bool
     */
    protected bool $unique;

    /**
     * @var float
     */
    protected float $default;

    /**
     * @var int
     */
    protected int $decimalPlaces;
}
