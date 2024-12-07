<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Organization;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Other;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest\PermissionsResult\Repository;

/**
 * @property ?Organization $organization
 * @property ?Repository $repository
 * @property ?Other $other
 */
interface PermissionsResult
{
}
