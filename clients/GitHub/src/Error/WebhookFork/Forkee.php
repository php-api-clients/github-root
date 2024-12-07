<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookFork;

use Error;

final class Forkee extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee $error)
    {
    }
}
