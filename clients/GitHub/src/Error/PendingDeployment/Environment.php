<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\PendingDeployment;

use Error;

final class Environment extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PendingDeployment\Environment $error)
    {
    }
}
