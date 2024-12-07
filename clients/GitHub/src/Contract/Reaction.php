<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $nodeId
 * @property ?SimpleUser $user
 * @property string $content
 * @property string $createdAt
 */
interface Reaction
{
}
