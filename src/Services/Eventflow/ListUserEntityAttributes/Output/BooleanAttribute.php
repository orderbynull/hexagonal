<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class BooleanAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
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
