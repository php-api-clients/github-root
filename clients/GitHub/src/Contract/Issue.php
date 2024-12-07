<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Issue\Labels\One;
use ApiClients\Client\GitHub\Schema\Issue\PullRequest;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\ReactionRollup;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\SubIssuesSummary;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property string $repositoryUrl
 * @property string $labelsUrl
 * @property string $commentsUrl
 * @property string $eventsUrl
 * @property string $htmlUrl
 * @property int $number
 * @property string $state
 * @property ?string $stateReason
 * @property string $title
 * @property ?string $body
 * @property ?SimpleUser $user
 * @property array<One> $labels
 * @property ?SimpleUser $assignee
 * @property ?array $assignees
 * @property ?Milestone $milestone
 * @property bool $locked
 * @property ?string $activeLockReason
 * @property int $comments
 * @property ?PullRequest $pullRequest
 * @property ?string $closedAt
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?bool $draft
 * @property ?SimpleUser $closedBy
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 * @property ?string $timelineUrl
 * @property ?Repository $repository
 * @property ?Integration $performedViaGithubApp
 * @property string $authorAssociation
 * @property ?ReactionRollup $reactions
 * @property ?SubIssuesSummary $subIssuesSummary
 */
interface Issue
{
}
