<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

/**
 * Class Attribute
 * @package Hexagonal\Domain\Eventflow\Attribute
 */
abstract class Attribute
{
    use PropertyAccessTrait;

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $label = '';

    /**
     * @var string
     */
    protected $type;

    /**
     * @var bool
     */
    protected $required = false;

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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
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
}
