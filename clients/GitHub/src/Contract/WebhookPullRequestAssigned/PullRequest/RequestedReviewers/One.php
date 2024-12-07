<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestAssigned\PullRequest\RequestedReviewers;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestAssigned\PullRequest\RequestedReviewers\One\Parent_;

/**
 * @property ?bool $deleted
 * @property ?string $description
 * @property string $htmlUrl
 * @property int $id
 * @property string $membersUrl
 * @property string $name
 * @property string $nodeId
 * @property ?Parent_ $parent
 * @property string $permission
 * @property string $privacy
 * @property string $repositoriesUrl
 * @property string $slug
 * @property string $url
 */
interface One
{
}
