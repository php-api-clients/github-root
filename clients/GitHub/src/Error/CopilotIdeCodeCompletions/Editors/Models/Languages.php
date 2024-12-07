<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CopilotIdeCodeCompletions\Editors\Models;

use Error;

final class Languages extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotIdeCodeCompletions\Editors\Models\Languages $error)
    {
    }
}
