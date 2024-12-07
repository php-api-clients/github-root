<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded $permissionsAdded
 * @property \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded $permissionsUpgraded
 * @property \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult $permissionsResult
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
