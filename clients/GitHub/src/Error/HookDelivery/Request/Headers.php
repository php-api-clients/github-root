<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\HookDelivery\Request;

use Error;

final class Headers extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\HookDelivery\Request\Headers $error)
    {
    }
}
