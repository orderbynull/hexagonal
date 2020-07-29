<?php

declare(strict_types=1);

namespace Hexagonal\UseCases\Eventflow\Query;

use Hexagonal\Domain\Attribute\Value\AttributeValue;
use Hexagonal\Exceptions\AttributeValueException;
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
     * @param int $applicationId
     * @param int $userId
     * @param string $attributeId
     * @return AttributeValue
     * @throws AttributeValueException
     */
    public function get(int $applicationId, int $userId, string $attributeId): AttributeValue
    {
        $value = $this->userEntityAttributeValue->get($applicationId, $userId, $attributeId);
        if (is_null($value)) {
            throw new AttributeValueException("Missing value for attributeId={$attributeId}");
        }

        return $value;
    }
}