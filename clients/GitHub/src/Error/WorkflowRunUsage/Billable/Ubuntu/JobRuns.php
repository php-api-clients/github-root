<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WorkflowRunUsage\Billable\Ubuntu;

use Error;

final class JobRuns extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns $error)
    {
    }
}
