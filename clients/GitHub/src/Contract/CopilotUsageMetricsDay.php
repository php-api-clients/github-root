<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $date
 * @property ?int $totalActiveUsers
 * @property ?int $totalEngagedUsers
 * @property ?\ApiClients\Client\GitHub\Schema\CopilotIdeCodeCompletions $copilotIdeCodeCompletions
 * @property ?\ApiClients\Client\GitHub\Schema\CopilotIdeChat $copilotIdeChat
 * @property ?\ApiClients\Client\GitHub\Schema\CopilotDotcomChat $copilotDotcomChat
 * @property ?\ApiClients\Client\GitHub\Schema\CopilotDotcomPullRequests $copilotDotcomPullRequests
 */
interface CopilotUsageMetricsDay
{
}
