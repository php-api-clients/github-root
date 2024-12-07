<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookWorkflowRunCompleted\WorkflowRun;

use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Base;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Head;

/**
 * @property Base $base
 * @property Head $head
 * @property int|float $id
 * @property int|float $number
 * @property string $url
 */
interface PullRequests
{
}
