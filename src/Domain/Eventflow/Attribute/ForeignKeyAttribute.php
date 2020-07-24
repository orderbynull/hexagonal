<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Porto\Containers\EAV\Enums\EntityAttributeTypeEnum;

/**
 * Class ForeignKeyAttribute.
 */
final class ForeignKeyAttribute extends Attribute
{
    /**
     * @var string
     */
    protected $type = EntityAttributeTypeEnum::FOREIGN_KEY;

    /**
     * @var int
     */
    protected int $refEntityId;

    /**
     * @var array
     */
    protected array $attributesIds = [];

    /**
     * @return int
     */
    public function getRefEntityId(): int
    {
        return $this->refEntityId;
    }

    /**
     * @param int $refEntityId
     */
    public function setRefEntityId(int $refEntityId): void
    {
        $this->refEntityId = $refEntityId;
    }

    /**
     * @return array
     */
    public function getAttributesIds(): array
    {
        return $this->attributesIds;
    }

    /**
     * @param array $attributesIds
     */
    public function setAttributesIds(array $attributesIds): void
    {
        $this->attributesIds = $attributesIds;
    }
}
