<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class DateTimeAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
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
