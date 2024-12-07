<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int|float $id
 * @property ?string $nodeId
 * @property ?string $projectNodeId
 * @property string $contentNodeId
 * @property string $contentType
 * @property ?SimpleUser $creator
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $archivedAt
 */
interface ProjectsV2Item
{
}
