<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Organization;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Other;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsUpgraded\Repository;

/**
 * @property ?Organization $organization
 * @property ?Repository $repository
 * @property ?Other $other
 */
interface PermissionsUpgraded
{
}
