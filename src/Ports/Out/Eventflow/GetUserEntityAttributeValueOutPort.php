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
     * @param int $userId
     * @param string $attributeId
     * @return AttributeValue
     */
    public function get(int $userId, string $attributeId): AttributeValue;
}