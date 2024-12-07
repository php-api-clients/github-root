<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Actor;
use ApiClients\Client\GitHub\Schema\Event\Payload;
use ApiClients\Client\GitHub\Schema\Event\Repo;

/**
 * @property string $id
 * @property ?string $type
 * @property Actor $actor
 * @property Repo $repo
 * @property ?Actor $org
 * @property Payload $payload
 * @property bool $public
 * @property ?string $createdAt
 */
interface Event
{
}
