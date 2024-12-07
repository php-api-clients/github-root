<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookWorkflowJobWaiting;

use Error;

final class WorkflowJob extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting\WorkflowJob $error)
    {
    }
}
