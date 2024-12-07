<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookMarketplacePurchasePendingChange;

use ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChange\PreviousMarketplacePurchase\Account;
use ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChange\PreviousMarketplacePurchase\Plan;

/**
 * @property Account $account
 * @property string $billingCycle
 * @property ?string $freeTrialEndsOn
 * @property ?string $nextBillingDate
 * @property bool $onFreeTrial
 * @property Plan $plan
 * @property int $unitCount
 */
interface PreviousMarketplacePurchase
{
}
