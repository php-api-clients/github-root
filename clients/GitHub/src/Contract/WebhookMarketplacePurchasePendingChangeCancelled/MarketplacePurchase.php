<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookMarketplacePurchasePendingChangeCancelled;

use ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChangeCancelled\MarketplacePurchase\Account;
use ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChangeCancelled\MarketplacePurchase\Plan;

/**
 * @property Account $account
 * @property string $billingCycle
 * @property string $freeTrialEndsOn
 * @property ?string $nextBillingDate
 * @property bool $onFreeTrial
 * @property Plan $plan
 * @property int $unitCount
 */
interface MarketplacePurchase
{
}
