<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PendingDeployment;

use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Team;

/**
 * @property ?string $type
 * @property SimpleUser|Team|null $reviewer
 */
interface Reviewers
{
}
