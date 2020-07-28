<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * Class Attribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
abstract class Attribute
{
    public $value;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $label;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var int
     */
    public int $entityId;

    /**
     * @var bool
     */
    public bool $required;

    /**
     * Attribute constructor.
     * @param array $args
     */
    public function __construct(array $args = null)
    {
        if (!is_null($args)) {
            $this->fromArray($args);
        }
    }

    /**
     * @param array $properties
     *
     * @return $this
     */
    public function fromArray(array $properties)
    {
        $accessor = PropertyAccess::createPropertyAccessor();

        foreach ($properties as $property => $value) {
            if ($accessor->isWritable($this, $property)) {
                $accessor->setValue($this, $property, $value);
            }
        }

        return $this;
    }
}
