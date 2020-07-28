<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class StringAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
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
