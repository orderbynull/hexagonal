<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class EnumAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class EnumAttribute extends Attribute
{
    /**
     * @var string
     */
    public string $kind;

    /**
     * @var array
     */
    public array $options;
}
