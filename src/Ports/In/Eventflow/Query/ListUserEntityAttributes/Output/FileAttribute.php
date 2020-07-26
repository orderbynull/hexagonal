<?php

declare(strict_types=1);

namespace Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output;

/**
 * Class FileAttribute
 * @package Hexagonal\Domain\Eventflow\Attribute
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
