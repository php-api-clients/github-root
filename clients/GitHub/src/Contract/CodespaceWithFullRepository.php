<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $name
 * @property ?string $displayName
 * @property ?string $environmentId
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $billableOwner
 * @property \ApiClients\Client\GitHub\Schema\FullRepository $repository
 * @property ?\ApiClients\Client\GitHub\Schema\CodespaceMachine $machine
 * @property ?string $devcontainerPath
 * @property ?bool $prebuild
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $lastUsedAt
 * @property string $state
 * @property string $url
 * @property \ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository\GitStatus $gitStatus
 * @property string $location
 * @property ?int $idleTimeoutMinutes
 * @property string $webUrl
 * @property string $machinesUrl
 * @property string $startUrl
 * @property string $stopUrl
 * @property ?string $publishUrl
 * @property ?string $pullsUrl
 * @property array $recentFolders
 * @property ?\ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository\RuntimeConstraints $runtimeConstraints
 * @property ?bool $pendingOperation
 * @property ?string $pendingOperationDisabledReason
 * @property ?string $idleTimeoutNotice
 * @property ?int $retentionPeriodMinutes
 * @property ?string $retentionExpiresAt
 */
interface CodespaceWithFullRepository
{
}
