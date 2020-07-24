<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Porto\Containers\EAV\Enums\EntityAttributeTypeEnum;

/**
 * Class BooleanAttribute.
 */
final class BooleanAttribute extends Attribute
{
    /**
     * @var string
     */
    protected $type = EntityAttributeTypeEnum::BOOLEAN;

    /**
     * @var string|null
     */
    protected ?string $trueLabel = null;

    /**
     * @var string|null
     */
    protected ?string $falseLabel = null;

    /**
     * @return string|null
     */
    public function getTrueLabel(): ?string
    {
        return $this->trueLabel;
    }

    /**
     * @param string|null $trueLabel
     */
    public function setTrueLabel(?string $trueLabel): void
    {
        $this->trueLabel = $trueLabel;
    }

    /**
     * @return string|null
     */
    public function getFalseLabel(): ?string
    {
        return $this->falseLabel;
    }

    /**
     * @param string|null $falseLabel
     */
    public function setFalseLabel(?string $falseLabel): void
    {
        $this->falseLabel = $falseLabel;
    }
}
