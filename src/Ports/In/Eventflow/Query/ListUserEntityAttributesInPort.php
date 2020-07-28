<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query;

use Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output\Attributes;

/**
 * Interface ListUserEntityAttributesInPort
 * @package Hexagonal\Ports\In\Eventflow\Query
 */
interface ListUserEntityAttributesInPort
{
    /**
     * @param int $userId
     * @param int $applicationId
     * @param bool $followForeignKey
     * @return Attributes
     */
    public function list(int $userId, int $applicationId, bool $followForeignKey = false): Attributes;
}
