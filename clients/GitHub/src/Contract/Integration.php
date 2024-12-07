<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration\Permissions;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property ?string $slug
 * @property string $nodeId
 * @property ?string $clientId
 * @property ?SimpleUser $owner
 * @property string $name
 * @property ?string $description
 * @property string $externalUrl
 * @property string $htmlUrl
 * @property string $createdAt
 * @property string $updatedAt
 * @property Permissions $permissions
 * @property array $events
 * @property ?int $installationsCount
 * @property ?string $clientSecret
 * @property ?string $webhookSecret
 * @property ?string $pem
 */
interface Integration
{
}
