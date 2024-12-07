<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentStatusCreated;

use Error;

final class CheckRun extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\CheckRun $error)
    {
    }
}
