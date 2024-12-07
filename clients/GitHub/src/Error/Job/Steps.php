<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Job;

use Error;

final class Steps extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Job\Steps $error)
    {
    }
}
