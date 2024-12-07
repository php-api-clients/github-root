<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\GistHistory\ChangeStatus;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?SimpleUser $user
 * @property ?string $version
 * @property ?string $committedAt
 * @property ?ChangeStatus $changeStatus
 * @property ?string $url
 */
interface GistHistory
{
}
