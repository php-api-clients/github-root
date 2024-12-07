<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\HookDelivery;

use Error;

final class Response extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\HookDelivery\Response $error)
    {
    }
}
