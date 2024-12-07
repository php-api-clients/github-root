<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookIssueCommentEdited;

/**
 * @property ?string $activeLockReason
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\Assignee $assignee
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
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\Milestone $milestone
 * @property ?string $nodeId
 * @property ?int $number
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\PerformedViaGithubApp $performedViaGithubApp
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\Reactions $reactions
 * @property ?string $repositoryUrl
 * @property string $state
 * @property ?string $timelineUrl
 * @property ?string $title
 * @property ?string $updatedAt
 * @property ?string $url
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookIssueCommentEdited\Issue\User $user
 */
interface Issue
{
}
