<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCheckSuiteRerequested\CheckSuite;

use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Owner;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\CheckSuite\App\Permissions;

/**
 * @property ?string $createdAt
 * @property ?string $description
 * @property ?array $events
 * @property ?string $externalUrl
 * @property string $htmlUrl
 * @property ?int $id
 * @property ?string $clientId
 * @property string $name
 * @property string $nodeId
 * @property ?Owner $owner
 * @property ?Permissions $permissions
 * @property ?string $slug
 * @property ?string $updatedAt
 */
interface App
{
}
