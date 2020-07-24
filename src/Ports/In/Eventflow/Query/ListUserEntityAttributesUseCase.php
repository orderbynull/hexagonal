<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query;

use Hexagonal\Domain\Eventflow\Attribute\Attribute;

/**
 * Interface ListUserEntityAttributesUseCase
 * @package Hexagonal\Ports\In\Eventflow\Query
 */
interface ListUserEntityAttributesUseCase
{
    /**
     * @param int $userId
     * @param bool $followForeignKey
     * @return Attribute[]
     */
    public function list(int $userId, bool $followForeignKey = false): array;
}
