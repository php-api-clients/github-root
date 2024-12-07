<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookTeamAddedToRepository;

use Error;

final class Repository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookTeamAddedToRepository\Repository $error)
    {
    }
}
