<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property ?string $note
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $creator
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
