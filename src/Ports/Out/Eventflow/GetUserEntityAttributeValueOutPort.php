<?php

declare(strict_types=1);

namespace Hexagonal\Ports\Out\Eventflow;

use Hexagonal\Domain\Attribute\Value\AttributeValue;

/**
 * Interface GetUserEntityAttributeValueOutPort
 * @package Hexagonal\Ports\Out\Eventflow
 */
interface GetUserEntityAttributeValueOutPort
{
    /**
     * @param int $applicationId
     * @param int $userId
     * @param string $attributeId
     * @return AttributeValue|null
     */
    public function get(int $applicationId, int $userId, string $attributeId): ?AttributeValue;
}