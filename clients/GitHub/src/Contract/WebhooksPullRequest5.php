<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Assignee;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\AutoMerge;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Base;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Head;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\MergedBy;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Milestone;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\RequestedReviewers\One;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\RequestedReviewers\Zero;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\User;

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
interface WebhooksPullRequest5
{
}
