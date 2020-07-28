<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

/**
 * Class FileAttribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
final class FileAttribute extends Attribute
{
    /**
     * @var int|null
     */
    public ?int $max;

    /**
     * @var array
     */
    public array $mimes;

    /**
     * @var bool
     */
    public bool $keepRevisions;

    /**
     * @var bool
     */
    public bool $multipleUploads;
}
