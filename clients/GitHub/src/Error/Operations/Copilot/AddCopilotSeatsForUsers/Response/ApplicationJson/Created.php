<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson;

use Error;

final class Created extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created $error)
    {
    }
}
