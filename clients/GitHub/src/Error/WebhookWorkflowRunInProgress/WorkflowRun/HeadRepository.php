<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookWorkflowRunInProgress\WorkflowRun;

use Error;

final class HeadRepository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookWorkflowRunInProgress\WorkflowRun\HeadRepository $error)
    {
    }
}
