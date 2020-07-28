<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributeMetas\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DecimalAttributeMeta
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class DecimalAttributeMeta extends AttributeMeta
{
    /**
     * @Assert\NotBlank(allowNull=true)
     * @var float|null
     */
    protected ?float $min;

    /**
     * @Assert\NotBlank(allowNull=true)
     * @var float|null
     */
    protected ?float $max;

    /**
     * @Assert\NotNull()
     * @var bool
     */
    protected bool $unique;

    /**
     * @Assert\NotBlank()
     * @var float
     */
    protected float $default;

    /**
     * @Assert\NotBlank()
     * @var int
     */
    protected int $decimalPlaces;

    /**
     * @return float|null
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * @param float|null $min
     */
    public function setMin(?float $min): void
    {
        $this->min = $min;
    }

    /**
     * @return float|null
     */
    public function getMax(): ?float
    {
        return $this->max;
    }

    /**
     * @param float|null $max
     */
    public function setMax(?float $max): void
    {
        $this->max = $max;
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
     * @return float
     */
    public function getDefault(): float
    {
        return $this->default;
    }

    /**
     * @param float $default
     */
    public function setDefault(float $default): void
    {
        $this->default = $default;
    }

    /**
     * @return int
     */
    public function getDecimalPlaces(): int
    {
        return $this->decimalPlaces;
    }

    /**
     * @param int $decimalPlaces
     */
    public function setDecimalPlaces(int $decimalPlaces): void
    {
        $this->decimalPlaces = $decimalPlaces;
    }
}
