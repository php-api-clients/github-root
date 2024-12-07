<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Organization;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Other;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsAdded\Repository;

/**
 * @property ?Organization $organization
 * @property ?Repository $repository
 * @property ?Other $other
 */
interface PermissionsAdded
{
}
