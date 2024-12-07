<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\TeamRoleAssignment\Permissions;
use ApiClients\Client\GitHub\Schema\TeamSimple;

/**
 * @property ?string $assignment
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property string $slug
 * @property ?string $description
 * @property ?string $privacy
 * @property ?string $notificationSetting
 * @property string $permission
 * @property ?Permissions $permissions
 * @property string $url
 * @property string $htmlUrl
 * @property string $membersUrl
 * @property string $repositoriesUrl
 * @property ?TeamSimple $parent
 */
interface TeamRoleAssignment
{
}
