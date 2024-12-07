<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property string $repositorySelection
 * @property string $repositoriesUrl
 * @property \ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrant\Permissions $permissions
 * @property string $accessGrantedAt
 * @property int $tokenId
 * @property string $tokenName
 * @property bool $tokenExpired
 * @property ?string $tokenExpiresAt
 * @property ?string $tokenLastUsedAt
 */
interface OrganizationProgrammaticAccessGrant
{
}
