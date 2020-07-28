<?php

declare(strict_types=1);

namespace Hexagonal\UseCases\Eventflow\Query;

use Hexagonal\Domain\Attribute\AttributeMetas;
use Hexagonal\Ports\In\Eventflow\Query\ListUserEntityAttributeMetasInPort;
use Hexagonal\Ports\Out\Eventflow\ListUserEntityAttributeMetasOutPort;

/**
 * Class ListUserEntityAttributeMetasUseCase
 * @package Hexagonal\Services\Eventflow\ListUserEntityAttributeMetas
 */
class ListUserEntityAttributeMetasUseCase implements ListUserEntityAttributeMetasInPort
{
    /**
     * @var ListUserEntityAttributeMetasOutPort
     */
    private ListUserEntityAttributeMetasOutPort $listUserEntityAttributeMetas;

    /**
     * ListUserEntityAttributesService constructor.
     * @param ListUserEntityAttributeMetasOutPort $userEntityAttributeMetas
     */
    public function __construct(ListUserEntityAttributeMetasOutPort $userEntityAttributeMetas)
    {
        $this->listUserEntityAttributeMetas = $userEntityAttributeMetas;
    }

    /**
     * @inheritDoc
     */
    public function list(int $userId, int $applicationId, bool $followForeignKey = false): AttributeMetas
    {
        if ($followForeignKey) {
            return $this->listUserEntityAttributeMetas->topMostAndThroughForeignKey($userId, $applicationId);
        } else {
            return $this->listUserEntityAttributeMetas->topMost($userId, $applicationId);
        }
    }
}
