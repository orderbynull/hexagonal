<?php

declare(strict_types=1);

namespace Hexagonal\UseCases\Eventflow\Query;

use Hexagonal\Domain\Attribute\Value\AttributeValue;
use Hexagonal\Ports\In\Eventflow\Query\GetUserEntityAttributeValueInPort;
use Hexagonal\Ports\Out\Eventflow\GetUserEntityAttributeValueOutPort;

/**
 * Class GetUserEntityAttributeValueUseCase
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributeMetas
 */
class GetUserEntityAttributeValueUseCase implements GetUserEntityAttributeValueInPort
{
    /**
     * @var GetUserEntityAttributeValueOutPort
     */
    private GetUserEntityAttributeValueOutPort $userEntityAttributeValue;

    /**
     * GetUserEntityAttributeValueUseCase constructor.
     * @param GetUserEntityAttributeValueOutPort $userEntityAttributeValue
     */
    public function __construct(GetUserEntityAttributeValueOutPort $userEntityAttributeValue)
    {
        $this->userEntityAttributeValue = $userEntityAttributeValue;
    }

    /**
     * @param int $userId
     * @param string $attributeId
     * @return AttributeValue
     */
    public function get(int $userId, string $attributeId): AttributeValue
    {
        return $this->userEntityAttributeValue->get($userId, $attributeId);
    }
}