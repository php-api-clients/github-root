<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson;

use Error;

final class Ok extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok $error)
    {
    }
}
