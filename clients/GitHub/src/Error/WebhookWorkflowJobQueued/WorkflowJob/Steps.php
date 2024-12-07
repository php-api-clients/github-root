<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookWorkflowJobQueued\WorkflowJob;

final class Steps extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps $error)
    {
    }
}
