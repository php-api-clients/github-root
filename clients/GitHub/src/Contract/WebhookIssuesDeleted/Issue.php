<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookIssuesDeleted;

/**
 * @property ?string $activeLockReason
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Assignee $assignee
 * @property array $assignees
 * @property string $authorAssociation
 * @property ?string $body
 * @property ?string $closedAt
 * @property int $comments
 * @property string $commentsUrl
 * @property string $createdAt
 * @property ?bool $draft
 * @property string $eventsUrl
 * @property string $htmlUrl
 * @property int $id
 * @property ?array $labels
 * @property string $labelsUrl
 * @property ?bool $locked
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Milestone $milestone
 * @property string $nodeId
 * @property int $number
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PerformedViaGithubApp $performedViaGithubApp
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\PullRequest $pullRequest
 * @property \ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\Reactions $reactions
 * @property string $repositoryUrl
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\SubIssuesSummary $subIssuesSummary
 * @property ?string $state
 * @property ?string $stateReason
 * @property ?string $timelineUrl
 * @property string $title
 * @property string $updatedAt
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssuesDeleted\Issue\User $user
 */
interface Issue
{
}
