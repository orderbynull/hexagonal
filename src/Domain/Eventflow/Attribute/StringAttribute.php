<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Porto\Containers\EAV\Enums\EntityAttributeStringValidatorTypeEnum;
use Porto\Containers\EAV\Enums\EntityAttributeTypeEnum;

/**
 * Class StringAttribute.
 */
final class StringAttribute extends Attribute
{
    /**
     * @var string
     */
    protected $type = EntityAttributeTypeEnum::STRING;

    /**
     * @var int
     */
    protected $size = 255;

    /**
     * @var bool
     */
    protected $unique = false;

    /**
     * @var string|null
     */
    protected ?string $default;

    /**
     * @var string
     */
    protected $validation = EntityAttributeStringValidatorTypeEnum::NONE;

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return bool
     */
    public function isUnique(): bool
    {
        return $this->unique;
    }

    /**
     * @param bool $unique
     */
    public function setUnique(bool $unique): void
    {
        $this->unique = $unique;
    }

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
    public function getValidation(): string
    {
        return $this->validation;
    }

    /**
     * @param string $validation
     */
    public function setValidation(string $validation): void
    {
        $this->validation = $validation;
    }
}
