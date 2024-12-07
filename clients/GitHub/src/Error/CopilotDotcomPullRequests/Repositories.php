<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CopilotDotcomPullRequests;

use Error;

final class Repositories extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotDotcomPullRequests\Repositories $error)
    {
    }
}
