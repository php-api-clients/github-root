<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property SimpleUser $owner
 * @property PermissionsAdded $permissionsAdded
 * @property PermissionsUpgraded $permissionsUpgraded
 * @property PermissionsResult $permissionsResult
 * @property string $repositorySelection
 * @property ?int $repositoryCount
 * @property ?array $repositories
 * @property string $createdAt
 * @property int $tokenId
 * @property string $tokenName
 * @property bool $tokenExpired
 * @property ?string $tokenExpiresAt
 * @property ?string $tokenLastUsedAt
 */
interface PersonalAccessTokenRequest
{
}
