<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\BillingUsageReport;

use Error;

final class UsageItems extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\BillingUsageReport\UsageItems $error)
    {
    }
}
