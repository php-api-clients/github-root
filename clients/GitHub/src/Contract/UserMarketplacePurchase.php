<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\MarketplaceAccount;
use ApiClients\Client\GitHub\Schema\MarketplaceListingPlan;

/**
 * @property string $billingCycle
 * @property ?string $nextBillingDate
 * @property ?int $unitCount
 * @property bool $onFreeTrial
 * @property ?string $freeTrialEndsOn
 * @property ?string $updatedAt
 * @property MarketplaceAccount $account
 * @property MarketplaceListingPlan $plan
 */
interface UserMarketplacePurchase
{
}
