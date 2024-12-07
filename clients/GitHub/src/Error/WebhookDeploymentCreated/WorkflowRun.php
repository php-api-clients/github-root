<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentCreated;

use Error;

final class WorkflowRun extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\WorkflowRun $error)
    {
    }
}
