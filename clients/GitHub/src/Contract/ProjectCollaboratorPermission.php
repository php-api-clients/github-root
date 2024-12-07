<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $permission
 * @property ?SimpleUser $user
 */
interface ProjectCollaboratorPermission
{
}
