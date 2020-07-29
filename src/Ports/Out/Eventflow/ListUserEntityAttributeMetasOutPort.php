<?php

declare(strict_types=1);

namespace Hexagonal\Ports\Out\Eventflow;

use Hexagonal\Domain\Attribute\AttributeMetas;

/**
 * Interface ListUserEntityAttributeMetasOutPort
 * @package Hexagonal\Ports\Out\Eventflow
 */
interface ListUserEntityAttributeMetasOutPort
{
    /**
     * @param int $applicationId
     * @return AttributeMetas
     */
    public function topMost(int $applicationId): AttributeMetas;

    /**
     * @param int $applicationId
     * @return AttributeMetas
     */
    public function topMostAndThroughForeignKey(int $applicationId): AttributeMetas;
}