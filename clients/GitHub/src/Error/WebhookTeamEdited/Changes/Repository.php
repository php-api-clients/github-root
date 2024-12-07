<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookTeamEdited\Changes;

use Error;

final class Repository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookTeamEdited\Changes\Repository $error)
    {
    }
}
