<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PageBuild\Error;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property string $status
 * @property Error $error
 * @property ?SimpleUser $pusher
 * @property string $commit
 * @property int $duration
 * @property string $createdAt
 * @property string $updatedAt
 */
interface PageBuild
{
}
