<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDeploymentReviewApproved\WorkflowRun;

use Error;

final class HeadRepository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewApproved\WorkflowRun\HeadRepository $error)
    {
    }
}
