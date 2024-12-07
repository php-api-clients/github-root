<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $name
 * @property ?string $description
 * @property ?string $baseRole
 * @property ?string $source
 * @property array $permissions
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $organization
 * @property string $createdAt
 * @property string $updatedAt
 */
interface OrganizationRole
{
}
