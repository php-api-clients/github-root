<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewDismissed;

/**
 * @property \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Links $links
 * @property ?string $activeLockReason
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Assignee $assignee
 * @property array $assignees
 * @property string $authorAssociation
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\AutoMerge $autoMerge
 * @property \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Base $base
 * @property ?string $body
 * @property ?string $closedAt
 * @property string $commentsUrl
 * @property string $commitsUrl
 * @property string $createdAt
 * @property string $diffUrl
 * @property bool $draft
 * @property \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Head $head
 * @property string $htmlUrl
 * @property int $id
 * @property string $issueUrl
 * @property array $labels
 * @property bool $locked
 * @property ?string $mergeCommitSha
 * @property ?string $mergedAt
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\Milestone $milestone
 * @property string $nodeId
 * @property int $number
 * @property string $patchUrl
 * @property array<\ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\RequestedReviewers\Zero|\ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\RequestedReviewers\One> $requestedReviewers
 * @property array $requestedTeams
 * @property string $reviewCommentUrl
 * @property string $reviewCommentsUrl
 * @property string $state
 * @property string $statusesUrl
 * @property string $title
 * @property string $updatedAt
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed\PullRequest\User $user
 */
interface PullRequest
{
}
