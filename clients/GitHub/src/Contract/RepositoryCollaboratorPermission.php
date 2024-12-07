<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Collaborator;

/**
 * @property string $permission
 * @property string $roleName
 * @property ?Collaborator $user
 */
interface RepositoryCollaboratorPermission
{
}
