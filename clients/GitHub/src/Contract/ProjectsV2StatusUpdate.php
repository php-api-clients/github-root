<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int|float $id
 * @property string $nodeId
 * @property ?string $projectNodeId
 * @property ?SimpleUser $creator
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $status
 * @property ?string $startDate
 * @property ?string $targetDate
 * @property ?string $body
 */
interface ProjectsV2StatusUpdate
{
}
