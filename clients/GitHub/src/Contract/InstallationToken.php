<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\AppPermissions;

/**
 * @property string $token
 * @property string $expiresAt
 * @property ?AppPermissions $permissions
 * @property ?string $repositorySelection
 * @property ?array $repositories
 * @property ?string $singleFile
 * @property ?bool $hasMultipleSingleFiles
 * @property ?array $singleFilePaths
 */
interface InstallationToken
{
}
