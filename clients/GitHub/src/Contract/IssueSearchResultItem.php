<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

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
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property array $labels
 * @property ?\ApiClients\Client\GitHub\Schema\IssueSearchResultItem\SubIssuesSummary $subIssuesSummary
 * @property string $state
 * @property ?string $stateReason
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $assignee
 * @property ?\ApiClients\Client\GitHub\Schema\Milestone $milestone
 * @property int $comments
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $closedAt
 * @property ?array $textMatches
 * @property ?\ApiClients\Client\GitHub\Schema\IssueSearchResultItem\PullRequest $pullRequest
 * @property ?string $body
 * @property int|float $score
 * @property string $authorAssociation
 * @property ?bool $draft
 * @property ?\ApiClients\Client\GitHub\Schema\Repository $repository
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 * @property ?string $timelineUrl
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 * @property ?\ApiClients\Client\GitHub\Schema\ReactionRollup $reactions
 */
interface IssueSearchResultItem
{
}
