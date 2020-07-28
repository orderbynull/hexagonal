<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class DecimalAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
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
