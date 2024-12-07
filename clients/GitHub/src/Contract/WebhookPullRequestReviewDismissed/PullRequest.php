<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewDismissed;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Assignee;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\AutoMerge;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Base;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Head;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Links;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Milestone;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\RequestedReviewers\One;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\RequestedReviewers\Zero;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\User;

/**
 * @property Links $links
 * @property ?string $activeLockReason
 * @property ?Assignee $assignee
 * @property array $assignees
 * @property string $authorAssociation
 * @property ?AutoMerge $autoMerge
 * @property Base $base
 * @property ?string $body
 * @property ?string $closedAt
 * @property string $commentsUrl
 * @property string $commitsUrl
 * @property string $createdAt
 * @property string $diffUrl
 * @property bool $draft
 * @property Head $head
 * @property string $htmlUrl
 * @property int $id
 * @property string $issueUrl
 * @property array $labels
 * @property bool $locked
 * @property ?string $mergeCommitSha
 * @property ?string $mergedAt
 * @property ?Milestone $milestone
 * @property string $nodeId
 * @property int $number
 * @property string $patchUrl
 * @property array<Zero|One> $requestedReviewers
 * @property array $requestedTeams
 * @property string $reviewCommentUrl
 * @property string $reviewCommentsUrl
 * @property string $state
 * @property string $statusesUrl
 * @property string $title
 * @property string $updatedAt
 * @property string $url
 * @property ?User $user
 */
interface PullRequest
{
}
