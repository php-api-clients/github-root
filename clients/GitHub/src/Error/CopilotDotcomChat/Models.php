<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CopilotDotcomChat;

use Error;

final class Models extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotDotcomChat\Models $error)
    {
    }
}
