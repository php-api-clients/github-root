<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PullRequest;

use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $label
 * @property string $ref
 * @property Repository $repo
 * @property string $sha
 * @property SimpleUser $user
 */
interface Head
{
}
