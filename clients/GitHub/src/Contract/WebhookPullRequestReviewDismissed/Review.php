<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewDismissed;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\Review\Links;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\Review\User;

/**
 * @property Links $links
 * @property string $authorAssociation
 * @property ?string $body
 * @property string $commitId
 * @property string $htmlUrl
 * @property int $id
 * @property string $nodeId
 * @property string $pullRequestUrl
 * @property string $state
 * @property string $submittedAt
 * @property ?User $user
 */
interface Review
{
}
