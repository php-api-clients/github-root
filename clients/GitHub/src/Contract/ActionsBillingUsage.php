<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\ActionsBillingUsage\MinutesUsedBreakdown;

/**
 * @property int $totalMinutesUsed
 * @property int $totalPaidMinutesUsed
 * @property int $includedMinutes
 * @property MinutesUsedBreakdown $minutesUsedBreakdown
 */
interface ActionsBillingUsage
{
}
