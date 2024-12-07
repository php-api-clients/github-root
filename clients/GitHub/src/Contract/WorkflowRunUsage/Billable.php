<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WorkflowRunUsage;

use ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Macos;
use ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu;
use ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Windows;

/**
 * @property ?Ubuntu $ubuntu
 * @property ?Macos $macos
 * @property ?Windows $windows
 */
interface Billable
{
}
