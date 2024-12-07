<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $login
 * @property int $id
 * @property string $nodeId
 * @property string $avatarUrl
 * @property ?string $gravatarId
 * @property string $url
 * @property string $htmlUrl
 * @property string $followersUrl
 * @property string $subscriptionsUrl
 * @property string $organizationsUrl
 * @property string $reposUrl
 * @property string $receivedEventsUrl
 * @property string $type
 * @property int|float $score
 * @property string $followingUrl
 * @property string $gistsUrl
 * @property string $starredUrl
 * @property string $eventsUrl
 * @property ?int $publicRepos
 * @property ?int $publicGists
 * @property ?int $followers
 * @property ?int $following
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?string $name
 * @property ?string $bio
 * @property ?string $email
 * @property ?string $location
 * @property bool $siteAdmin
 * @property ?bool $hireable
 * @property ?array $textMatches
 * @property ?string $blog
 * @property ?string $company
 * @property ?string $suspendedAt
 * @property ?string $userViewType
 */
interface UserSearchResultItem
{
}
