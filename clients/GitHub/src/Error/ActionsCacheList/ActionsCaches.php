<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ActionsCacheList;

use Error;

final class ActionsCaches extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ActionsCacheList\ActionsCaches $error)
    {
    }
}
