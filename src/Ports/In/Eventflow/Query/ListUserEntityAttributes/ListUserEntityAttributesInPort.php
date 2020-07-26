<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output\Attributes;

/**
 * Interface ListUserEntityAttributesUseCase
 * @package Hexagonal\Ports\In\Eventflow\Query
 */
interface ListUserEntityAttributesInPort
{
    /**
     * @param int $userId
     * @param bool $followForeignKey
     * @return Attributes
     */
    public function list(int $userId, bool $followForeignKey = false): Attributes;
}
