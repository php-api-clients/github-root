<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentCreated\WorkflowRun;

use Error;

final class ReferencedWorkflows extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\WorkflowRun\ReferencedWorkflows $error)
    {
    }
}
