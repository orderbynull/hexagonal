<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DateTimeAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class DateTimeAttribute extends Attribute
{
    /**
     * @Assert\NotBlank()
     * @Assert\Choice({"date", "datetime"})
     * @var string
     */
    protected string $kind;

    /**
     * @Assert\NotBlank(allowNull=true)
     * @var string|null
     */
    protected ?string $default;

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
}
