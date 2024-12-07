<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CopilotDotcomPullRequests\Repositories;

use Error;

final class Models extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotDotcomPullRequests\Repositories\Models $error)
    {
    }
}
