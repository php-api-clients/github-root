<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $billingCycle
 * @property ?string $nextBillingDate
 * @property ?int $unitCount
 * @property bool $onFreeTrial
 * @property ?string $freeTrialEndsOn
 * @property ?string $updatedAt
 * @property \ApiClients\Client\GitHub\Schema\MarketplaceAccount $account
 * @property \ApiClients\Client\GitHub\Schema\MarketplaceListingPlan $plan
 */
interface UserMarketplacePurchase
{
}
