<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output;

use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Exception\ValidationFailedException;
use Symfony\Component\Validator\Validation;

/**
 * Class Attribute
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output
 */
abstract class Attribute
{
    const ENUM = 'enum';
    const FILE = 'file';
    const TEXT = 'text';
    const STRING = 'string';
    const BOOLEAN = 'boolean';
    const INTEGER = 'integer';
    const DECIMAL = 'decimal';
    const DATETIME = 'date_time';
    const FOREIGN_KEY = 'foreign_key';

    /**
     * @Assert\NotBlank(allowNull=true)
     * @var mixed
     */
    protected $value;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected string $id;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected string $name;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected string $label;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected string $type;

    /**
     * @Assert\NotBlank()
     * @var int
     */
    protected int $entityId;

    /**
     * @Assert\NotNull()
     * @var bool
     */
    protected bool $required;

    /**
     * @Assert\NotNull()
     * @var bool
     */
    protected bool $allowedToEdit;

    /**
     * Attribute constructor.
     * @param array $args
     */
    public function __construct(array $args = null)
    {
        if (!is_null($args)) {
            $this->fromArray($args);
        }

        $validator = Validation::createValidatorBuilder()->enableAnnotationMapping()->getValidator();
        $violations = $validator->validate($this);

        if (count($violations)) {
            throw new ValidationFailedException('', $violations);
        }
    }

    /**
     * @param array $properties
     *
     * @return $this
     */
    private function fromArray(array $properties)
    {
        $accessor = PropertyAccess::createPropertyAccessor();
        foreach ($properties as $property => $value) {
            if ($accessor->isWritable($this, $property)) {
                $accessor->setValue($this, $property, $value);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }

    /**
     * @param int $entityId
     */
    public function setEntityId(int $entityId): void
    {
        $this->entityId = $entityId;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     */
    public function setRequired(bool $required): void
    {
        $this->required = $required;
    }

    /**
     * @return bool
     */
    public function isAllowedToEdit(): bool
    {
        return $this->allowedToEdit;
    }

    /**
     * @param bool $allowedToEdit
     */
    public function setAllowedToEdit(bool $allowedToEdit): void
    {
        $this->allowedToEdit = $allowedToEdit;
    }
}
