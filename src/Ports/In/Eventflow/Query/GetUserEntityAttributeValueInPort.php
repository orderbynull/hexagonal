<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query;

use Hexagonal\Domain\Attribute\Value\AttributeValue;

/**
 * Interface GetUserEntityAttributeValueInPort
 * @package Hexagonal\Ports\In\Eventflow\Query
 */
interface GetUserEntityAttributeValueInPort
{
    /**
     * @param int $applicationId
     * @param int $userId
     * @param string $attributeId
     * @return AttributeValue
     */
    public function get(int $applicationId, int $userId, string $attributeId): AttributeValue;
}
