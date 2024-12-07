<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookIssuesOpened;

use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue\Assignee;
use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue\Milestone;
use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue\PerformedViaGithubApp;
use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue\PullRequest;
use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue\Reactions;
use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue\SubIssuesSummary;
use ApiClients\Client\GitHub\Schema\WebhookIssuesOpened\Issue\User;

/**
 * @property ?string $activeLockReason
 * @property ?Assignee $assignee
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
 * @property ?Milestone $milestone
 * @property string $nodeId
 * @property int $number
 * @property ?PerformedViaGithubApp $performedViaGithubApp
 * @property ?PullRequest $pullRequest
 * @property Reactions $reactions
 * @property string $repositoryUrl
 * @property ?SubIssuesSummary $subIssuesSummary
 * @property ?string $state
 * @property ?string $stateReason
 * @property ?string $timelineUrl
 * @property string $title
 * @property string $updatedAt
 * @property string $url
 * @property ?User $user
 */
interface Issue
{
}
