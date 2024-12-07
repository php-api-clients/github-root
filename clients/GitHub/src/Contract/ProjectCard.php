<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property ?string $note
 * @property ?SimpleUser $creator
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?bool $archived
 * @property ?string $columnName
 * @property ?string $projectId
 * @property string $columnUrl
 * @property ?string $contentUrl
 * @property string $projectUrl
 */
interface ProjectCard
{
}
