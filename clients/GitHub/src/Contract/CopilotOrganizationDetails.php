<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown;

/**
 * @property CopilotSeatBreakdown $seatBreakdown
 * @property string $publicCodeSuggestions
 * @property ?string $ideChat
 * @property ?string $platformChat
 * @property ?string $cli
 * @property string $seatManagementSetting
 * @property ?string $planType
 */
interface CopilotOrganizationDetails
{
}
