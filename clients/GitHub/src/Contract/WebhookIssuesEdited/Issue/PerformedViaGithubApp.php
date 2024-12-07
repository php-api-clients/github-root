<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookIssuesEdited\Issue;

use ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp\Owner;
use ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Issue\PerformedViaGithubApp\Permissions;

/**
 * @property ?string $createdAt
 * @property ?string $description
 * @property ?array $events
 * @property ?string $externalUrl
 * @property string $htmlUrl
 * @property ?int $id
 * @property string $name
 * @property string $nodeId
 * @property ?Owner $owner
 * @property ?Permissions $permissions
 * @property ?string $slug
 * @property ?string $updatedAt
 */
interface PerformedViaGithubApp
{
}
