<?php

declare(strict_types=1);

namespace Hexagonal\Ports\Out\Eventflow;

use Hexagonal\Domain\Eventflow\Attribute\Attribute;

/**
 * Interface ListUserEntityAttributesPort
 * @package Hexagonal\Ports\Out\Eventflow
 */
interface ListUserEntityAttributesPort
{
    /**
     * @param int $userId
     * @return Attribute[]
     */
    public function topMost(int $userId): array;

    /**
     * @param int $userId
     * @return Attribute[]
     */
    public function topMostAndThroughForeignKey(int $userId): array;
}