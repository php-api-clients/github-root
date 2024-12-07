<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WorkflowRunUsage;

use Error;

final class Billable extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable $error)
    {
    }
}
