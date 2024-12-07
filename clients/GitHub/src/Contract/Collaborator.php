<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Collaborator\Permissions;

/**
 * @property string $login
 * @property int $id
 * @property ?string $email
 * @property ?string $name
 * @property string $nodeId
 * @property string $avatarUrl
 * @property ?string $gravatarId
 * @property string $url
 * @property string $htmlUrl
 * @property string $followersUrl
 * @property string $followingUrl
 * @property string $gistsUrl
 * @property string $starredUrl
 * @property string $subscriptionsUrl
 * @property string $organizationsUrl
 * @property string $reposUrl
 * @property string $eventsUrl
 * @property string $receivedEventsUrl
 * @property string $type
 * @property bool $siteAdmin
 * @property ?Permissions $permissions
 * @property string $roleName
 * @property ?string $userViewType
 */
interface Collaborator
{
}
