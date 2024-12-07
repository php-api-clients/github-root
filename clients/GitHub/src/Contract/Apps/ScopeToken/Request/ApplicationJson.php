<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Apps\ScopeToken\Request;

use ApiClients\Client\GitHub\Schema\AppPermissions;

/**
 * @property string $accessToken
 * @property ?string $target
 * @property ?int $targetId
 * @property ?array $repositories
 * @property ?array $repositoryIds
 * @property ?AppPermissions $permissions
 */
interface ApplicationJson
{
}
