<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class ForeignKeyAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
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
