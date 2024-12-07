<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property ?string $reason
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property string $repositorySelection
 * @property string $repositoriesUrl
 * @property \ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions $permissions
 * @property string $createdAt
 * @property int $tokenId
 * @property string $tokenName
 * @property bool $tokenExpired
 * @property ?string $tokenExpiresAt
 * @property ?string $tokenLastUsedAt
 */
interface OrganizationProgrammaticAccessGrantRequest
{
}
