<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

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
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property array<\ApiClients\Client\GitHub\Schema\Issue\Labels\One> $labels
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $assignee
 * @property ?array $assignees
 * @property ?\ApiClients\Client\GitHub\Schema\Milestone $milestone
 * @property bool $locked
 * @property ?string $activeLockReason
 * @property int $comments
 * @property ?\ApiClients\Client\GitHub\Schema\Issue\PullRequest $pullRequest
 * @property ?string $closedAt
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?bool $draft
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $closedBy
 * @property ?string $bodyHtml
 * @property ?string $bodyText
 * @property ?string $timelineUrl
 * @property ?\ApiClients\Client\GitHub\Schema\Repository $repository
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $performedViaGithubApp
 * @property string $authorAssociation
 * @property ?\ApiClients\Client\GitHub\Schema\ReactionRollup $reactions
 * @property ?\ApiClients\Client\GitHub\Schema\SubIssuesSummary $subIssuesSummary
 */
interface Issue
{
}
