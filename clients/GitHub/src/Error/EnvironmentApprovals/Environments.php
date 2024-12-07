<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\EnvironmentApprovals;

use Error;

final class Environments extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\EnvironmentApprovals\Environments $error)
    {
    }
}
