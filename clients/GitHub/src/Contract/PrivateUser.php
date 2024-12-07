<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PrivateUser\Plan;

/**
 * @property string $login
 * @property int $id
 * @property ?string $userViewType
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
 * @property ?string $name
 * @property ?string $company
 * @property ?string $blog
 * @property ?string $location
 * @property ?string $email
 * @property ?string $notificationEmail
 * @property ?bool $hireable
 * @property ?string $bio
 * @property ?string $twitterUsername
 * @property int $publicRepos
 * @property int $publicGists
 * @property int $followers
 * @property int $following
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $privateGists
 * @property int $totalPrivateRepos
 * @property int $ownedPrivateRepos
 * @property int $diskUsage
 * @property int $collaborators
 * @property bool $twoFactorAuthentication
 * @property ?Plan $plan
 * @property ?bool $businessPlus
 * @property ?string $ldapDn
 */
interface PrivateUser
{
}
