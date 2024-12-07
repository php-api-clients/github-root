<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $state
 * @property string $role
 * @property string $organizationUrl
 * @property \ApiClients\Client\GitHub\Schema\OrganizationSimple $organization
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property ?\ApiClients\Client\GitHub\Schema\OrgMembership\Permissions $permissions
 */
interface OrgMembership
{
}
