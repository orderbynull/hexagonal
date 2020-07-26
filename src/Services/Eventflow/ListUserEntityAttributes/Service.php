<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow\ListUserEntityAttributes;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\ListUserEntityAttributesInPort;
use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributes\Output\Attributes;
use Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributes\ListUserEntityAttributesOutPort;

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
    public function list(int $userId, int $applicationId, bool $followForeignKey = false): Attributes
    {
        if ($followForeignKey) {
            return $this->listUserEntityAttributes->topMostAndThroughForeignKey($userId, $applicationId);
        } else {
            return $this->listUserEntityAttributes->topMost($userId, $applicationId);
        }
    }
}
