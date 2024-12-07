<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Links $links
 * @property ?string $activeLockReason
 * @property ?int $additions
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Assignee $assignee
 * @property array $assignees
 * @property string $authorAssociation
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\AutoMerge $autoMerge
 * @property \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Base $base
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
 * @property \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Head $head
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
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\MergedBy $mergedBy
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Milestone $milestone
 * @property string $nodeId
 * @property int $number
 * @property string $patchUrl
 * @property ?bool $rebaseable
 * @property array<\ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\RequestedReviewers\Zero|\ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\RequestedReviewers\One> $requestedReviewers
 * @property array $requestedTeams
 * @property string $reviewCommentUrl
 * @property ?int $reviewComments
 * @property string $reviewCommentsUrl
 * @property string $state
 * @property string $statusesUrl
 * @property string $title
 * @property string $updatedAt
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\User $user
 */
interface WebhooksPullRequest5
{
}
