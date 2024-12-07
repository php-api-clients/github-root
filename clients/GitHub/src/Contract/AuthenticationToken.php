<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\AuthenticationToken\Permissions;

/**
 * @property string $token
 * @property string $expiresAt
 * @property ?Permissions $permissions
 * @property ?array $repositories
 * @property ?string $singleFile
 * @property ?string $repositorySelection
 */
interface AuthenticationToken
{
}
