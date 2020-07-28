<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributeMetas\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class BooleanAttributeMeta
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class BooleanAttributeMeta extends AttributeMeta
{
    /**
     * @Assert\NotBlank(allowNull=true)
     * @var string|null
     */
    protected ?string $trueLabel;

    /**
     * @Assert\NotBlank(allowNull=true)
     * @var string|null
     */
    protected ?string $falseLabel;

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
