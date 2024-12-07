<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property ?SimpleUser $owner
 * @property string $guid
 * @property string $state
 * @property bool $lockRepositories
 * @property bool $excludeMetadata
 * @property bool $excludeGitData
 * @property bool $excludeAttachments
 * @property bool $excludeReleases
 * @property bool $excludeOwnerProjects
 * @property bool $orgMetadataOnly
 * @property array $repositories
 * @property string $url
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $nodeId
 * @property ?string $archiveUrl
 * @property ?array $exclude
 */
interface Migration
{
}
