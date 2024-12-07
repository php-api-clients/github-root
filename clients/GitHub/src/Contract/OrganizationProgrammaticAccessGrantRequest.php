<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property ?string $reason
 * @property SimpleUser $owner
 * @property string $repositorySelection
 * @property string $repositoriesUrl
 * @property Permissions $permissions
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
