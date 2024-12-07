<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property string $htmlUrl
 * @property string $name
 * @property string $slug
 * @property ?string $description
 * @property ?string $privacy
 * @property ?string $notificationSetting
 * @property string $permission
 * @property string $membersUrl
 * @property string $repositoriesUrl
 * @property ?\ApiClients\Client\GitHub\Schema\TeamSimple $parent
 * @property int $membersCount
 * @property int $reposCount
 * @property string $createdAt
 * @property string $updatedAt
 * @property \ApiClients\Client\GitHub\Schema\TeamOrganization $organization
 * @property ?string $ldapDn
 */
interface TeamFull
{
}
