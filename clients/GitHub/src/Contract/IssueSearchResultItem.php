<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\IssueSearchResultItem\PullRequest;
use ApiClients\Client\GitHub\Schema\IssueSearchResultItem\SubIssuesSummary;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\ReactionRollup;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property string $repositoryUrl
 * @property string $labelsUrl
 * @property string $commentsUrl
 * @property string $eventsUrl
 * @property string $htmlUrl
 * @property int $id
 * @property string $nodeId
 * @property int $number
 * @property string $title
 * @property bool $locked
 * @property ?string $activeLockReason
 * @property ?array $assignees
 * @property ?SimpleUser $user
 * @property array $labels
 * @property ?SubIssuesSummary $subIssuesSummary
 * @property string $state
 * @property ?string $stateReason
 * @property ?SimpleUser $assignee
 * @property ?Milestone $milestone
 * @property int $comments
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $closedAt
 * @property ?array $textMatches
 * @property ?PullRequest $pullRequest
 * @property ?string $body
 * @property int|float $score
 * @property string $authorAssociation
 * @property ?bool $draft
 * @property ?Repository $repository
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 * @property ?string $timelineUrl
 * @property ?Integration $performedViaGithubApp
 * @property ?ReactionRollup $reactions
 */
interface IssueSearchResultItem
{
}
