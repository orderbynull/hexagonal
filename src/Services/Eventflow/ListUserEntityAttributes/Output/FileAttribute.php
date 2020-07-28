<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FileAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class FileAttribute extends Attribute
{
    /**
     * @Assert\NotBlank(allowNull=true)
     * @var int|null
     */
    protected ?int $max;

    /**
     * @Assert\NotNull()
     * @var array
     */
    protected array $mimes;

    /**
     * @Assert\NotNull()
     * @var bool
     */
    protected bool $keepRevisions;

    /**
     * @Assert\NotNull()
     * @var bool
     */
    protected bool $multipleUploads;

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
     * @return array
     */
    public function getMimes(): array
    {
        return $this->mimes;
    }

    /**
     * @param array $mimes
     */
    public function setMimes(array $mimes): void
    {
        $this->mimes = $mimes;
    }

    /**
     * @return bool
     */
    public function isKeepRevisions(): bool
    {
        return $this->keepRevisions;
    }

    /**
     * @param bool $keepRevisions
     */
    public function setKeepRevisions(bool $keepRevisions): void
    {
        $this->keepRevisions = $keepRevisions;
    }

    /**
     * @return bool
     */
    public function isMultipleUploads(): bool
    {
        return $this->multipleUploads;
    }

    /**
     * @param bool $multipleUploads
     */
    public function setMultipleUploads(bool $multipleUploads): void
    {
        $this->multipleUploads = $multipleUploads;
    }
}
