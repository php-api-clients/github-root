<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property int $id
 * @property string $nodeId
 * @property string $htmlUrl
 * @property string $diffUrl
 * @property string $patchUrl
 * @property string $issueUrl
 * @property string $commitsUrl
 * @property string $reviewCommentsUrl
 * @property string $reviewCommentUrl
 * @property string $commentsUrl
 * @property string $statusesUrl
 * @property int $number
 * @property string $state
 * @property bool $locked
 * @property string $title
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property ?string $body
 * @property array $labels
 * @property ?\ApiClients\Client\GitHub\Schema\Milestone $milestone
 * @property ?string $activeLockReason
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $closedAt
 * @property ?string $mergedAt
 * @property ?string $mergeCommitSha
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $assignee
 * @property ?array $assignees
 * @property ?array $requestedReviewers
 * @property ?array $requestedTeams
 * @property \ApiClients\Client\GitHub\Schema\PullRequestSimple\Head $head
 * @property \ApiClients\Client\GitHub\Schema\PullRequestSimple\Base $base
 * @property \ApiClients\Client\GitHub\Schema\PullRequestSimple\Links $links
 * @property string $authorAssociation
 * @property ?\ApiClients\Client\GitHub\Schema\AutoMerge $autoMerge
 * @property ?bool $draft
 */
interface PullRequestSimple
{
}
