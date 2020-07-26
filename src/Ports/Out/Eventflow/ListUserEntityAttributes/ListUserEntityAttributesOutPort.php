<?php

declare(strict_types=1);

namespace Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributes;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output\Attributes;

/**
 * Interface ListUserEntityAttributesOutPort
 * @package Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributes
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