<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class EnumAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
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
