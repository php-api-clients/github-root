<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $token
 * @property string $expiresAt
 * @property ?\ApiClients\Client\GitHub\Schema\AuthenticationToken\Permissions $permissions
 * @property ?array $repositories
 * @property ?string $singleFile
 * @property ?string $repositorySelection
 */
interface AuthenticationToken
{
}
