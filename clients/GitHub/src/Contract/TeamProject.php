<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\TeamProject\Permissions;

/**
 * @property string $ownerUrl
 * @property string $url
 * @property string $htmlUrl
 * @property string $columnsUrl
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property ?string $body
 * @property int $number
 * @property string $state
 * @property SimpleUser $creator
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $organizationPermission
 * @property ?bool $private
 * @property Permissions $permissions
 */
interface TeamProject
{
}
