<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Porto\Containers\EAV\Enums\EntityAttributeDateTypeEnum;
use Porto\Containers\EAV\Enums\EntityAttributeTypeEnum;

/**
 * Class DateTimeAttribute.
 */
final class DateTimeAttribute extends Attribute
{
    /**
     * @var string
     */
    protected $type = EntityAttributeTypeEnum::DATETIME;

    /**
     * @var string|null
     */
    protected ?string $default;

    /**
     * @var string
     */
    protected $kind = EntityAttributeDateTypeEnum::DATE;

    /**
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * @param string|null $default
     */
    public function setDefault(?string $default): void
    {
        $this->default = $default;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }
}
