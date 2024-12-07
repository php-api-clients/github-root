<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $name
 * @property ?string $description
 * @property ?string $baseRole
 * @property ?string $source
 * @property array $permissions
 * @property ?SimpleUser $organization
 * @property string $createdAt
 * @property string $updatedAt
 */
interface OrganizationRole
{
}
