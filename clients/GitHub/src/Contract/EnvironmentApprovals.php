<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property array $environments
 * @property string $state
 * @property SimpleUser $user
 * @property string $comment
 */
interface EnvironmentApprovals
{
}
