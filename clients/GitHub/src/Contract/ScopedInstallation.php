<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\AppPermissions;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property AppPermissions $permissions
 * @property string $repositorySelection
 * @property ?string $singleFileName
 * @property ?bool $hasMultipleSingleFiles
 * @property ?array $singleFilePaths
 * @property string $repositoriesUrl
 * @property SimpleUser $account
 */
interface ScopedInstallation
{
}
