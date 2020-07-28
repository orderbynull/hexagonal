<?php

declare(strict_types=1);

namespace Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributes;

use Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output\Attributes;

/**
 * Interface ListUserEntityAttributesOutPort
 * @package Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributes
 */
interface ListUserEntityAttributesOutPort
{
    /**
     * @param int $userId
     * @param int $applicationId
     * @return Attributes
     */
    public function topMost(int $userId, int $applicationId): Attributes;

    /**
     * @param int $userId
     * @param int $applicationId
     * @return Attributes
     */
    public function topMostAndThroughForeignKey(int $userId, int $applicationId): Attributes;
}