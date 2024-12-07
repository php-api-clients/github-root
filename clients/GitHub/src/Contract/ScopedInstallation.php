<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property \ApiClients\Client\GitHub\Schema\AppPermissions $permissions
 * @property string $repositorySelection
 * @property ?string $singleFileName
 * @property ?bool $hasMultipleSingleFiles
 * @property ?array $singleFilePaths
 * @property string $repositoriesUrl
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $account
 */
interface ScopedInstallation
{
}
