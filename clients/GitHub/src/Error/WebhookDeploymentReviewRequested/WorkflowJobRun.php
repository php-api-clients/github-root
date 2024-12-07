<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentReviewRequested;

use Error;

final class WorkflowJobRun extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRequested\WorkflowJobRun $error)
    {
    }
}
