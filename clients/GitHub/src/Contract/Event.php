<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $id
 * @property ?string $type
 * @property \ApiClients\Client\GitHub\Schema\Actor $actor
 * @property \ApiClients\Client\GitHub\Schema\Event\Repo $repo
 * @property ?\ApiClients\Client\GitHub\Schema\Actor $org
 * @property \ApiClients\Client\GitHub\Schema\Event\Payload $payload
 * @property bool $public
 * @property ?string $createdAt
 */
interface Event
{
}
