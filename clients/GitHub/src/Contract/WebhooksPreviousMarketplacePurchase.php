<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\WebhooksPreviousMarketplacePurchase\Account;
use ApiClients\Client\GitHub\Schema\WebhooksPreviousMarketplacePurchase\Plan;

/**
 * @property Account $account
 * @property string $billingCycle
 * @property string $freeTrialEndsOn
 * @property ?string $nextBillingDate
 * @property bool $onFreeTrial
 * @property Plan $plan
 * @property int $unitCount
 */
interface WebhooksPreviousMarketplacePurchase
{
}
