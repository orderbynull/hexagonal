<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class ForeignKeyAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class ForeignKeyAttribute extends Attribute
{
    /**
     * @var int
     */
    public int $refEntityId;

    /**
     * @var array
     */
    public array $attributesIds;
}
