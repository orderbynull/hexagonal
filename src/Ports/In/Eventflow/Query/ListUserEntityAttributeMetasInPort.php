<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query;

use Hexagonal\Domain\Attribute\AttributeMetas;

/**
 * Interface ListUserEntityAttributeMetasInPort
 * @package Hexagonal\Ports\In\Eventflow\Query
 */
interface ListUserEntityAttributeMetasInPort
{
    /**
     * @param int $userId
     * @param int $applicationId
     * @param bool $followForeignKey
     * @return AttributeMetas
     */
    public function list(int $userId, int $applicationId, bool $followForeignKey = false): AttributeMetas;
}
