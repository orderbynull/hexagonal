<?php

declare(strict_types=1);

namespace Hexagonal\Services\Eventflow;

use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributesUseCase;
use Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributesPort;

/**
 * Class ListUserEntityAttributesService
 * @package Hexagonal\Services\Eventflow
 */
class ListUserEntityAttributesService implements ListUserEntityAttributesUseCase
{
    /**
     * @var ListUserEntityAttributesPort
     */
    private ListUserEntityAttributesPort $listUserEntityAttributes;

    /**
     * ListUserEntityAttributesService constructor.
     * @param ListUserEntityAttributesPort $userEntityAttributes
     */
    public function __construct(ListUserEntityAttributesPort $userEntityAttributes)
    {
        $this->listUserEntityAttributes = $userEntityAttributes;
    }

    /**
     * @inheritDoc
     */
    public function list(int $userId, bool $followForeignKey = false): array
    {
        if ($followForeignKey) {
            return $this->listUserEntityAttributes->topMostAndThroughForeignKey($userId);
        } else {
            return $this->listUserEntityAttributes->topMost($userId);
        }
    }
}
