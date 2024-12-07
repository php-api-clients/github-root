<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookWorkflowJobInProgress\WorkflowJob;

use Error;

final class StepsA extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob\StepsA $error)
    {
    }
}
