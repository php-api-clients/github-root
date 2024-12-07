<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CopilotUsageMetrics;

use Error;

final class Breakdown extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotUsageMetrics\Breakdown $error)
    {
    }
}
