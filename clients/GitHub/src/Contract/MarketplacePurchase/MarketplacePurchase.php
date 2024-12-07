<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\MarketplacePurchase;

use ApiClients\Client\GitHub\Schema\MarketplaceListingPlan;

/**
 * @property ?string $billingCycle
 * @property ?string $nextBillingDate
 * @property ?bool $isInstalled
 * @property ?int $unitCount
 * @property ?bool $onFreeTrial
 * @property ?string $freeTrialEndsOn
 * @property ?string $updatedAt
 * @property ?MarketplaceListingPlan $plan
 */
interface MarketplacePurchase
{
}
