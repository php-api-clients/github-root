<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int|float $id
 * @property string $nodeId
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $owner
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $creator
 * @property string $title
 * @property ?string $description
 * @property bool $public
 * @property ?string $closedAt
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $number
 * @property ?string $shortDescription
 * @property ?string $deletedAt
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $deletedBy
 */
interface ProjectsV2
{
}
