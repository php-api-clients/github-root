<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\GistCommit\ChangeStatus;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property string $version
 * @property ?SimpleUser $user
 * @property ChangeStatus $changeStatus
 * @property string $committedAt
 */
interface GistCommit
{
}
