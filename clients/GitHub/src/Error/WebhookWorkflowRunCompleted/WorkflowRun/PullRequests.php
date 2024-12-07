<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookWorkflowRunCompleted\WorkflowRun;

use Error;

final class PullRequests extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests $error)
    {
    }
}
