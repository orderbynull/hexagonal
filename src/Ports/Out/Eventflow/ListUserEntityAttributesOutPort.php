<?php

declare(strict_types=1);

namespace Hexagonal\Ports\Out\Eventflow;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output\Attributes;

/**
 * Interface ListUserEntityAttributesPort
 * @package Hexagonal\Ports\Out\Eventflow
 */
interface ListUserEntityAttributesOutPort
{
    /**
     * @param int $userId
     * @return Attributes
     */
    public function topMost(int $userId): Attributes;

    /**
     * @param int $userId
     * @return Attributes
     */
    public function topMostAndThroughForeignKey(int $userId): Attributes;
}