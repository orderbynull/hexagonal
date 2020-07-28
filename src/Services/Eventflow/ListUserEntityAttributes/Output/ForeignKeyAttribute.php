<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ForeignKeyAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class ForeignKeyAttribute extends Attribute
{
    /**
     * @Assert\NotBlank()
     * @var int
     */
    protected int $refEntityId;

    /**
     * @Assert\NotNull()
     * @var array
     */
    protected array $attributesIds;

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
