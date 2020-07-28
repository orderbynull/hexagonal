<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class StringAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class StringAttribute extends Attribute
{
    /**
     * @Assert\NotBlank()
     * @var int
     */
    protected int $size;

    /**
     * @Assert\NotNull()
     * @var bool
     */
    protected bool $unique;

    /**
     * @Assert\NotBlank(allowNull=true)
     * @var string|null
     */
    protected ?string $default;

    /**
     * @Assert\NotBlank()
     * @Assert\Choice({"none", "email", "url"})
     * @var string
     */
    protected string $validation;

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
