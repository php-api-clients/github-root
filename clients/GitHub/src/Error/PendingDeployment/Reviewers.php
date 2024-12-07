<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\PendingDeployment;

use Error;

final class Reviewers extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PendingDeployment\Reviewers $error)
    {
    }
}
