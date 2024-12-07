<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\MarketplacePurchase;

use ApiClients\Client\GitHub\Schema\MarketplaceListingPlan;

/**
 * @property ?bool $isInstalled
 * @property ?string $effectiveDate
 * @property ?int $unitCount
 * @property ?int $id
 * @property ?MarketplaceListingPlan $plan
 */
interface MarketplacePendingChange
{
}
