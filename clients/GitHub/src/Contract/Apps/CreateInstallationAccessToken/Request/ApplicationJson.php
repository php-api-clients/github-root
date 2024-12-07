<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Apps\CreateInstallationAccessToken\Request;

use ApiClients\Client\GitHub\Schema\AppPermissions;

/**
 * @property ?array $repositories
 * @property ?array $repositoryIds
 * @property ?AppPermissions $permissions
 */
interface ApplicationJson
{
}
