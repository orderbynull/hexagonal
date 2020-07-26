<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class BooleanAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
 */
final class BooleanAttribute extends Attribute
{
    /**
     * @var string|null
     */
    public ?string $trueLabel;

    /**
     * @var string|null
     */
    public ?string $falseLabel;

}
