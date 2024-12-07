<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable;

/**
 * @property Billable $billable
 * @property ?int $runDurationMs
 */
interface WorkflowRunUsage
{
}
