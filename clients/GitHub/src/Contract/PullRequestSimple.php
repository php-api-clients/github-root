<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\AutoMerge;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\PullRequestSimple\Base;
use ApiClients\Client\GitHub\Schema\PullRequestSimple\Head;
use ApiClients\Client\GitHub\Schema\PullRequestSimple\Links;
use ApiClients\Client\GitHub\Schema\SimpleUser;

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
 * @property ?SimpleUser $user
 * @property ?string $body
 * @property array $labels
 * @property ?Milestone $milestone
 * @property ?string $activeLockReason
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $closedAt
 * @property ?string $mergedAt
 * @property ?string $mergeCommitSha
 * @property ?SimpleUser $assignee
 * @property ?array $assignees
 * @property ?array $requestedReviewers
 * @property ?array $requestedTeams
 * @property Head $head
 * @property Base $base
 * @property Links $links
 * @property string $authorAssociation
 * @property ?AutoMerge $autoMerge
 * @property ?bool $draft
 */
interface PullRequestSimple
{
}
