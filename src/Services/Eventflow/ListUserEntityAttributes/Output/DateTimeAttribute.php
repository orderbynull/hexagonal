<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class DateTimeAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class DateTimeAttribute extends Attribute
{
    /**
     * @var string
     */
    public string $kind;

    /**
     * @var string|null
     */
    public ?string $default;
}
