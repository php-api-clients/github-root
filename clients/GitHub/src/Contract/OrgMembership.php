<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\OrganizationSimple;
use ApiClients\Client\GitHub\Schema\OrgMembership\Permissions;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property string $state
 * @property string $role
 * @property string $organizationUrl
 * @property OrganizationSimple $organization
 * @property ?SimpleUser $user
 * @property ?Permissions $permissions
 */
interface OrgMembership
{
}
