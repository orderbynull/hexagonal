<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributeMetas\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class IntegerAttributeMeta
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class IntegerAttributeMeta extends AttributeMeta
{
    /**
     * @Assert\NotBlank(allowNull=true)
     * @var int|null
     */
    protected ?int $max;

    /**
     * @Assert\NotBlank(allowNull=true)
     * @var int|null
     */
    protected ?int $min;

    /**
     * @Assert\NotBlank()
     * @var int
     */
    protected int $default;

    /**
     * @Assert\NotNull()
     * @var bool
     */
    protected bool $unique;

    /**
     * @return int|null
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @param int|null $max
     */
    public function setMax(?int $max): void
    {
        $this->max = $max;
    }

    /**
     * @return int|null
     */
    public function getMin(): ?int
    {
        return $this->min;
    }

    /**
     * @param int|null $min
     */
    public function setMin(?int $min): void
    {
        $this->min = $min;
    }

    /**
     * @return int
     */
    public function getDefault(): int
    {
        return $this->default;
    }

    /**
     * @param int $default
     */
    public function setDefault(int $default): void
    {
        $this->default = $default;
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
}
