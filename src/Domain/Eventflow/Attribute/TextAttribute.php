<?php

declare(strict_types=1);

namespace Hexagonal\Domain\Eventflow\Attribute;

use Porto\Containers\EAV\Enums\EntityAttributeTypeEnum;

/**
 * Class TextAttribute.
 */
final class TextAttribute extends Attribute
{
    /**
     * @var string
     */
    protected $type = EntityAttributeTypeEnum::TEXT;
}
