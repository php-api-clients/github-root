<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CopilotIdeCodeCompletions\Editors;

use Error;

final class Models extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CopilotIdeCodeCompletions\Editors\Models $error)
    {
    }
}
