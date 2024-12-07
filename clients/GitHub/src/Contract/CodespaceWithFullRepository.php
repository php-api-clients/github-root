<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CodespaceMachine;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository\GitStatus;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository\RuntimeConstraints;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $name
 * @property ?string $displayName
 * @property ?string $environmentId
 * @property SimpleUser $owner
 * @property SimpleUser $billableOwner
 * @property FullRepository $repository
 * @property ?CodespaceMachine $machine
 * @property ?string $devcontainerPath
 * @property ?bool $prebuild
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $lastUsedAt
 * @property string $state
 * @property string $url
 * @property GitStatus $gitStatus
 * @property string $location
 * @property ?int $idleTimeoutMinutes
 * @property string $webUrl
 * @property string $machinesUrl
 * @property string $startUrl
 * @property string $stopUrl
 * @property ?string $publishUrl
 * @property ?string $pullsUrl
 * @property array $recentFolders
 * @property ?RuntimeConstraints $runtimeConstraints
 * @property ?bool $pendingOperation
 * @property ?string $pendingOperationDisabledReason
 * @property ?string $idleTimeoutNotice
 * @property ?int $retentionPeriodMinutes
 * @property ?string $retentionExpiresAt
 */
interface CodespaceWithFullRepository
{
}
