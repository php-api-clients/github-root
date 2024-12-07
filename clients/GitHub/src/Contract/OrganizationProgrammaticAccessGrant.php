<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrant\Permissions;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property SimpleUser $owner
 * @property string $repositorySelection
 * @property string $repositoriesUrl
 * @property Permissions $permissions
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
