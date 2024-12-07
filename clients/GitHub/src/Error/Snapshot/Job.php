<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Snapshot;

use Error;

final class Job extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Snapshot\Job $error)
    {
    }
}
