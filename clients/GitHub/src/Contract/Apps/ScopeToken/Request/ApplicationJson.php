<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Apps\ScopeToken\Request;

/**
 * @property string $accessToken
 * @property ?string $target
 * @property ?int $targetId
 * @property ?array $repositories
 * @property ?array $repositoryIds
 * @property ?\ApiClients\Client\GitHub\Schema\AppPermissions $permissions
 */
interface ApplicationJson
{
}
