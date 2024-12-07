<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property ?string $avatarUrl
 * @property int $id
 * @property string $nodeId
 * @property string $state
 * @property ?string $description
 * @property ?string $targetUrl
 * @property string $context
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?SimpleUser $creator
 */
interface Status
{
}
