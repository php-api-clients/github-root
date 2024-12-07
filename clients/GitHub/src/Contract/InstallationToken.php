<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $token
 * @property string $expiresAt
 * @property ?\ApiClients\Client\GitHub\Schema\AppPermissions $permissions
 * @property ?string $repositorySelection
 * @property ?array $repositories
 * @property ?string $singleFile
 * @property ?bool $hasMultipleSingleFiles
 * @property ?array $singleFilePaths
 */
interface InstallationToken
{
}
