<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser|\ApiClients\Client\GitHub\Schema\Enterprise $account
 * @property string $repositorySelection
 * @property string $accessTokensUrl
 * @property string $repositoriesUrl
 * @property string $htmlUrl
 * @property int $appId
 * @property int $targetId
 * @property string $targetType
 * @property \ApiClients\Client\GitHub\Schema\AppPermissions $permissions
 * @property array $events
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $singleFileName
 * @property ?bool $hasMultipleSingleFiles
 * @property ?array $singleFilePaths
 * @property string $appSlug
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $suspendedBy
 * @property ?string $suspendedAt
 * @property ?string $contactEmail
 */
interface Installation
{
}
