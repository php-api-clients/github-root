<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\BranchRestrictionPolicy;

use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner;
use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions;

/**
 * @property ?int $id
 * @property ?string $slug
 * @property ?string $nodeId
 * @property ?Owner $owner
 * @property ?string $name
 * @property ?string $clientId
 * @property ?string $description
 * @property ?string $externalUrl
 * @property ?string $htmlUrl
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?Permissions $permissions
 * @property ?array $events
 */
interface Apps
{
}
