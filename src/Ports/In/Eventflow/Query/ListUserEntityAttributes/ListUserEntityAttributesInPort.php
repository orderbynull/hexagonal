<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output\Attributes;

/**
 * Interface ListUserEntityAttributesInPort
 * @package Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes
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
