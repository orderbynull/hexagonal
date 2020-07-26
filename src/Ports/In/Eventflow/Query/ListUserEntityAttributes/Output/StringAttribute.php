<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class StringAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
 */
final class StringAttribute extends Attribute
{
    /**
     * @var int
     */
    public int $size;

    /**
     * @var bool
     */
    public bool $unique;

    /**
     * @var string|null
     */
    public ?string $default;

    /**
     * @var string
     */
    public string $validation;
}
