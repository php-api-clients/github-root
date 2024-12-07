<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property SimpleUser $enabledBy
 * @property string $mergeMethod
 * @property string $commitTitle
 * @property string $commitMessage
 */
interface AutoMerge
{
}
