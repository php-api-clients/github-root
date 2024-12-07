<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentCreated\Deployment\Payload;

use Error;

final class Zero extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\Payload\Zero $error)
    {
    }
}
