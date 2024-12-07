<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CopilotDotcomChat;
use ApiClients\Client\GitHub\Schema\CopilotDotcomPullRequests;
use ApiClients\Client\GitHub\Schema\CopilotIdeChat;
use ApiClients\Client\GitHub\Schema\CopilotIdeCodeCompletions;

/**
 * @property string $date
 * @property ?int $totalActiveUsers
 * @property ?int $totalEngagedUsers
 * @property ?CopilotIdeCodeCompletions $copilotIdeCodeCompletions
 * @property ?CopilotIdeChat $copilotIdeChat
 * @property ?CopilotDotcomChat $copilotDotcomChat
 * @property ?CopilotDotcomPullRequests $copilotDotcomPullRequests
 */
interface CopilotUsageMetricsDay
{
}
