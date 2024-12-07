<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\ReviewDismissedIssueEvent\DismissedReview;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property SimpleUser $actor
 * @property string $event
 * @property ?string $commitId
 * @property ?string $commitUrl
 * @property string $createdAt
 * @property ?Integration $performedViaGithubApp
 * @property DismissedReview $dismissedReview
 */
interface ReviewDismissedIssueEvent
{
}
