<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestAutoMergeDisabled;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Assignee;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\AutoMerge;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Base;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Head;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Links;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\MergedBy;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Milestone;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\RequestedReviewers\One;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\RequestedReviewers\Zero;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\User;

/**
 * @property Links $links
 * @property ?string $activeLockReason
 * @property ?int $additions
 * @property ?Assignee $assignee
 * @property array $assignees
 * @property string $authorAssociation
 * @property ?AutoMerge $autoMerge
 * @property Base $base
 * @property ?string $body
 * @property ?int $changedFiles
 * @property ?string $closedAt
 * @property ?int $comments
 * @property string $commentsUrl
 * @property ?int $commits
 * @property string $commitsUrl
 * @property string $createdAt
 * @property ?int $deletions
 * @property string $diffUrl
 * @property bool $draft
 * @property Head $head
 * @property string $htmlUrl
 * @property int $id
 * @property string $issueUrl
 * @property array $labels
 * @property bool $locked
 * @property ?bool $maintainerCanModify
 * @property ?string $mergeCommitSha
 * @property ?bool $mergeable
 * @property ?string $mergeableState
 * @property ?bool $merged
 * @property ?string $mergedAt
 * @property ?MergedBy $mergedBy
 * @property ?Milestone $milestone
 * @property string $nodeId
 * @property int $number
 * @property string $patchUrl
 * @property ?bool $rebaseable
 * @property array<Zero|One> $requestedReviewers
 * @property array $requestedTeams
 * @property string $reviewCommentUrl
 * @property ?int $reviewComments
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
