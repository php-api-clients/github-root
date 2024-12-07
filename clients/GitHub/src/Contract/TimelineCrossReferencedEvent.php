<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $event
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $actor
 * @property string $createdAt
 * @property string $updatedAt
 * @property \ApiClients\Client\GitHub\Schema\TimelineCrossReferencedEvent\Source $source
 */
interface TimelineCrossReferencedEvent
{
}
