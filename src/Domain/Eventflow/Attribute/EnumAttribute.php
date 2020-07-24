<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Porto\Containers\EAV\Enums\EntityAttributeEnumOptionsTypeEnum;
use Porto\Containers\EAV\Enums\EntityAttributeTypeEnum;

/**
 * Class EnumAttribute.
 */
final class EnumAttribute extends Attribute
{
    /**
     * @var string
     */
    protected $type = EntityAttributeTypeEnum::ENUM;

    /**
     * @var string
     */
    protected $kind = EntityAttributeEnumOptionsTypeEnum::SINGLE_VALUE;

    /**
     * @var array
     */
    protected $options = [];

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

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }
}
