<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentCreated\Deployment;

use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Owner;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp\Permissions;

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
