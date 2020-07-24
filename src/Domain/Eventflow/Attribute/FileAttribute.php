<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Porto\Containers\EAV\Enums\EntityAttributeTypeEnum;

/**
 * Class FileAttribute.
 */
final class FileAttribute extends Attribute
{
    /**
     * @var string
     */
    protected $type = EntityAttributeTypeEnum::FILE;

    /**
     * @var int|null
     */
    protected $max = null;

    /**
     * @var array
     */
    protected $mimes = [];

    /**
     * @var bool
     */
    protected $multipleUploads = false;

    /**
     * @var bool
     */
    protected $keepRevisions = false;

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
}
