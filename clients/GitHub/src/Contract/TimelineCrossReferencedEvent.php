<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\TimelineCrossReferencedEvent\Source;

/**
 * @property string $event
 * @property ?SimpleUser $actor
 * @property string $createdAt
 * @property string $updatedAt
 * @property Source $source
 */
interface TimelineCrossReferencedEvent
{
}
