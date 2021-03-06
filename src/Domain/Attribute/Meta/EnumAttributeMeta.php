<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributeMetas\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EnumAttributeMeta
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class EnumAttributeMeta extends AttributeMeta
{
    /**
     * @Assert\NotBlank()
     * @Assert\Choice({"Single value", "Multiple values"})
     * @var string
     */
    protected string $kind;

    /**
     * @Assert\NotNull()
     * @var array
     */
    protected array $options;

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
