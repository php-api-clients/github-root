<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int|float $id
 * @property string $nodeId
 * @property SimpleUser $owner
 * @property SimpleUser $creator
 * @property string $title
 * @property ?string $description
 * @property bool $public
 * @property ?string $closedAt
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $number
 * @property ?string $shortDescription
 * @property ?string $deletedAt
 * @property ?SimpleUser $deletedBy
 */
interface ProjectsV2
{
}
