<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributesInPort;
use Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributes\ListUserEntityAttributesOutPort;
use Hexagonal\Services\Eventflow\ListUserEntityAttributes\Output\Attributes;

/**
 * Class ListUserEntityAttributesUseCase
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributes
 */
class ListUserEntityAttributesUseCase implements ListUserEntityAttributesInPort
{
    /**
     * @var ListUserEntityAttributesOutPort
     */
    private ListUserEntityAttributesOutPort $listUserEntityAttributes;

    /**
     * ListUserEntityAttributesService constructor.
     * @param ListUserEntityAttributesOutPort $userEntityAttributes
     */
    public function __construct(ListUserEntityAttributesOutPort $userEntityAttributes)
    {
        $this->listUserEntityAttributes = $userEntityAttributes;
    }

    /**
     * @inheritDoc
     */
    public function list(int $userId, int $applicationId, bool $followForeignKey = false): Attributes
    {
        if ($followForeignKey) {
            return $this->listUserEntityAttributes->topMostAndThroughForeignKey($userId, $applicationId);
        } else {
            return $this->listUserEntityAttributes->topMost($userId, $applicationId);
        }
    }
}
