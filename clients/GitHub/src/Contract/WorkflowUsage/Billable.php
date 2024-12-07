<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WorkflowUsage;

use ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Macos;
use ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu;
use ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Windows;

/**
 * @property ?Ubuntu $ubuntu
 * @property ?Macos $macos
 * @property ?Windows $windows
 */
interface Billable
{
}
