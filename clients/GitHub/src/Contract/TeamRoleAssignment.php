<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

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
 * @property ?\ApiClients\Client\GitHub\Schema\TeamRoleAssignment\Permissions $permissions
 * @property string $url
 * @property string $htmlUrl
 * @property string $membersUrl
 * @property string $repositoriesUrl
 * @property ?\ApiClients\Client\GitHub\Schema\TeamSimple $parent
 */
interface TeamRoleAssignment
{
}
