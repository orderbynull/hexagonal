<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output\Attributes;
use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributesInPort;
use Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributesOutPort;

/**
 * Class ListUserEntityAttributesService
 * @package Hexagonal\Services\Eventflow
 */
class Service implements ListUserEntityAttributesInPort
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
    public function list(int $userId, bool $followForeignKey = false): Attributes
    {
        if ($followForeignKey) {
            return $this->listUserEntityAttributes->topMostAndThroughForeignKey($userId);
        } else {
            return $this->listUserEntityAttributes->topMost($userId);
        }
    }
}
