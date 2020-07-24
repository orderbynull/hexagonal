<?php

declare(strict_types=1);

namespace Hexagonal\Ports\Out\Eventflow;

/**
 * Interface ListUserEntityAttributesPort
 * @package Hexagonal\Ports\Out\Eventflow
 */
interface ListUserEntityAttributesPort
{
    /**
     * @param int $userId
     * @return array
     */
    public function topMost(int $userId): array;

    /**
     * @param int $userId
     * @return array
     */
    public function topMostAndThroughForeignKey(int $userId): array;
}