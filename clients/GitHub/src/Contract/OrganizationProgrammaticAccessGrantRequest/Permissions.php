<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\OrganizationProgrammaticAccessGrantRequest;

use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Organization;
use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Other;
use ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions\Repository;

/**
 * @property ?Organization $organization
 * @property ?Repository $repository
 * @property ?Other $other
 */
interface Permissions
{
}
