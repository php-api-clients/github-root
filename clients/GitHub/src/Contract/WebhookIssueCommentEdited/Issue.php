<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookIssueCommentEdited;

use ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\Assignee;
use ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\Milestone;
use ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp;
use ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\Reactions;
use ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\User;

/**
 * @property ?string $activeLockReason
 * @property ?Assignee $assignee
 * @property ?array $assignees
 * @property ?string $authorAssociation
 * @property ?string $body
 * @property ?string $closedAt
 * @property ?int $comments
 * @property ?string $commentsUrl
 * @property ?string $createdAt
 * @property ?string $eventsUrl
 * @property ?string $htmlUrl
 * @property ?int $id
 * @property array $labels
 * @property ?string $labelsUrl
 * @property bool $locked
 * @property ?Milestone $milestone
 * @property ?string $nodeId
 * @property ?int $number
 * @property ?PerformedViaGithubApp $performedViaGithubApp
 * @property ?Reactions $reactions
 * @property ?string $repositoryUrl
 * @property string $state
 * @property ?string $timelineUrl
 * @property ?string $title
 * @property ?string $updatedAt
 * @property ?string $url
 * @property ?User $user
 */
interface Issue
{
}
